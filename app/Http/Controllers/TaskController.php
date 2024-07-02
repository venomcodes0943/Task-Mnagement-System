<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        $creadentials = $request->validate([
            'taskTitle' => 'required',
            'schedule_id' => 'required'
        ]);

        $task = Task::create($creadentials);
        try {
            return response()->json(['task' => $task], 201);
        } catch (\Exception $exception) {
            return response()->json(['message' => "Error:" . $exception->getMessage()]);
        }
    }
}
