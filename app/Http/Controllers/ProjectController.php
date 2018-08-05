<?php

namespace App\Http\Controllers;

use App\Project;
use App\ProjectSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function index($slug = false)
    {
        $user = Auth::user();
        $projects = Project::get();

        if($slug === false)
            return view('home')->with([
                'projects' => $projects,
                'user'     => $user
            ]);

        $currentProject = Project::where('slug', '=', $slug)->first();
        if(!$currentProject)
            abort(404);

        $sections = ProjectSection::where('project_id', '=', $currentProject['id'])->get();
       
        return view('project')->with([
            'currentProject' => $currentProject,
            'projects'       => $projects,
            'sections'       => $sections,
            'user'           => $user
        ]);
    }
}
