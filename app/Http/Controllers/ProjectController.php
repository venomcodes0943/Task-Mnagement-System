<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();
        if ($request->ajax()) {
            $projects = Project::where('user_id', $user->id)->get();
            return response()->json($projects);
        }

        $projects = Project::where('user_id', $user->id)->get();
        return view('projects', compact('projects'));
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);

        if (request()->ajax()) {
            return response()->json(['project' => $project]);
        } else {
            return view('schedule', compact('project'));
        }
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'name' => 'required|string|unique:projects,name',
            'color' => 'required|string|max:7'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }


        $credentials = [
            'user_id' => $request->user_id,
            'name' => $request->name,
            'color' => $request->color
        ];

        try {
            $project = Project::create($credentials);
            return response()->json(['project' => $project], 201);
        } catch (\Exception $e) {
            return response()->json(['Error:' => $e->getMessage()], 500);
        }
    }


    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'string|unique:projects,name,' . $id,
        ]);
        if ($validator->fails()) {
            return response()->json(['errors', $validator->errors()], 422);
        }


        if (!$project) {
            return response()->json(['message' => 'Record not found'], 404);
        }
        if ($request->has('name')) {
            $project->name = $request->name;
        }

        if ($request->has('color')) {
            $project->color = $request->color;
        }
        if ($request->has('archived')) {
            $project->archived = $request->archived;
        }

        if ($request->has('unarchived')) {
            $project->archived = $request->unarchived;
        }
        try {
            $project->save();
            return response()->json(['message' => 'Record updated successfully', 'record' => $project], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to update record'], 500);
        }

    }

}

