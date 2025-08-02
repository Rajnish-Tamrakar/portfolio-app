<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $query = Project::active()->ordered();

        // Filter by technology if provided
        if ($request->has('tech') && $request->tech) {
            $query->whereJsonContains('tech_stack', $request->tech);
        }

        $projects = $query->paginate(6);
        
        // Get all unique technologies for filter
        $allTechnologies = Project::active()
            ->get()
            ->pluck('tech_stack')
            ->flatten()
            ->unique()
            ->sort()
            ->values();

        return view('projects.index', compact('projects', 'allTechnologies'));
    }

    public function show(Project $project)
    {
        if (!$project->is_active) {
            abort(404);
        }

        $relatedProjects = Project::active()
            ->where('id', '!=', $project->id)
            ->ordered()
            ->limit(3)
            ->get();

        return view('projects.show', compact('project', 'relatedProjects'));
    }
}
