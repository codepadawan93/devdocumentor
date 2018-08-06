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
        $menuProjects = Project::get();
        $user = Auth::user();
        if(isset($_GET['s']))
        {
            $s = $_GET['s'];
            $projects = $this->search($s);
        }
        else{
            $projects = $menuProjects;
        }



        if($slug === false)
            return view('home')->with([
                's'        => $s ?? '',
                'menuProjects' => $menuProjects,
                'projects' => $projects,
                'user'     => $user
            ]);
        
        $currentProject = Project::where('slug', '=', $slug)->first();
        if(!$currentProject)
            abort(404);

        $sections = ProjectSection::where('project_id', '=', $currentProject['id'])->get();
       
        return view('project')->with([
            's'              => '',
            'currentProject' => $currentProject,
            'menuProjects'   => $menuProjects,
            'projects'       => $projects,
            'sections'       => $sections,
            'user'           => $user
        ]);
    }

    private function search($searchParams)
    {
        $projects = Project::where('name', 'like', "%$searchParams%")
            ->orWhere('subtitle', 'like', "%$searchParams%")
            ->get();

        if($projects->count() === 0)
        {
            $sections = ProjectSection::where('name', 'like', "%$searchParams%")
                ->orWhere('subtitle', 'like', "%$searchParams%")
                ->orWhere('content', 'like', "%$searchParams%")
                ->get();
            foreach($sections as $section)
            {
                $projects->add(Project::where('id', '=', $section->post_id)->first());
            }
        }
        return $projects;
    }
}
