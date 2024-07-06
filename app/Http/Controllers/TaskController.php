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


    public function delete($id)
    {
        try {
            $task = Task::findOrFail($id);
            $task->delete();
            return response()->json(['message' => 'Task Deleted Successfully'], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error:' . $e->getMessage()], 500);
        }
    }
}
