<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $skillsByCategory = Skill::active()
            ->ordered()
            ->get()
            ->groupBy('category');

        $categories = Skill::getCategories();

        return view('skills', compact('skillsByCategory', 'categories'));
    }
}
