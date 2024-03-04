<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use League\CommonMark\CommonMarkConverter;

class ProjectController extends Controller
{
    public function index(){
        return view('projects', [
            'projects' => Project::all()
        ]);
    }

    public function show(string $projectName){
        $project = Project::getFromName($projectName);

        $description = (new CommonMarkConverter())->convert($project->pro_description)->getContent();

        return view('project', [
            'project' => $project,
            'projectDescription' => $description
        ]);
    }
}
