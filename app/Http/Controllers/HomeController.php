<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProjects = Project::active()
            ->featured()
            ->ordered()
            ->limit(3)
            ->get();

        $topSkills = Skill::active()
            ->ordered()
            ->limit(8)
            ->get();

        return view('home', compact('featuredProjects', 'topSkills'));
    }
}
