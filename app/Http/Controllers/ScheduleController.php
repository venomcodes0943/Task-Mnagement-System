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
}
