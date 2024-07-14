<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function __invoke()
    {
        $projects = Project::query()->get();
        return view('pages.projects', compact('projects'));
    }

    public function single(Request $request, Project $project)
    {
        return view('pages.single_project', compact('project'));
    }
}
