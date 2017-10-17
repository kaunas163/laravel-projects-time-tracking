<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Track;

class ProjectsController extends Controller
{
    public function index()
    {
//        $projects = Project::all();
        $projects = Project::all()->sortByDesc('title');
        return view('projects.index', compact('projects'));
    }

    public function show($id)
    {
        $project = Project::find($id);
        return view('projects.show', compact('project'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'title' => ['required', 'min:1', 'max:100']
        ];

        $this->validate($request, $rules);

//        die('project saved');

        Project::create($request->all());

        return redirect('projects')->with('message', 'Project succesfully added!');
    }
}
