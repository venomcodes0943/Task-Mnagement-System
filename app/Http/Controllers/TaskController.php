<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Schedule;
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
    public function show($id)
    {
        $task = Task::findOrFail($id);
        if ($task) {
            try {
                return response()->json($task, 201);
            } catch (\Exception $exception) {
                return response()->json(['message' => "Error:" . $exception->getMessage()]);

            }
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


    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        if ($request->has('taskTitle')) {
            $task->taskTitle = $request->taskTitle;
        }
        if ($request->has('description')) {
            $task->description = $request->description;
        }
        if ($request->has('scheduleIdChange')) {
            $task->schedule_id = $request->scheduleIdChange;
        }
        if ($request->has('completed')) {
            $task->completed = $request->completed;
        }

        if ($request->has('uncompleted')) {
            $task->completed = $request->uncompleted;
        }
        try {
            $task->save();
            $updatedSchedule = Schedule::find($task->schedule_id);
            return response()->json(['message' => 'Task Updated', 'schedule' => $updatedSchedule], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error:' . $e->getMessage()], 500);
        }
    }
}
