<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'project_id' => 'required|integer',
            'title' => 'required|string|max:255',
        ]);
        try {
            $schedule = Schedule::create($validatedData);
            return response()->json(['message' => 'Schedule Added Successfully'], 201);

        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to add schedule', 'error' => $e->getMessage()], 500);
        }
    }

    public function update(Request $request, $id)
    {

        $schedule = Schedule::findOrFail($id);

        if (!$schedule) {
            return response()->json(['message' => 'Record not found'], 404);
        }

        if ($request->has('title')) {
            $schedule->title = $request->title;
        }
        try {
            $schedule->save();
            return response()->json(['message' => 'Record updated successfully', 'record' => $schedule], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to update record'], 500);
        }
    }



    public function destroy($id)
    {
        try {
            $schedule = Schedule::findOrFail($id);
            $schedule->delete();

            return response()->json(['message' => 'Schedule Deleted Successfully'], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to Delete schedule', 'error' => $e->getMessage()], 500);
        }
    }

}
