<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $projects = Project::where('archived', 0)->get();
            return response()->json($projects);
        }

        $projects = Project::where('archived', 0)->get();
        return view('projects', compact('projects'));
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('schedule', compact('project'));
    }

    public function create(Request $request)
    {
        $creadentials = $request->validate([
            'name' => 'required|string|max:255',
            'color' => 'required|string|max:7'
        ]);

        $project = Project::create($creadentials);

        return response()->json(['project' => $project], 201);
    }
}
