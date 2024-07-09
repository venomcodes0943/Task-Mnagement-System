<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    public function create(Request $request)
    {
        $credentials = $request->validate([
            'task_id' => 'required|integer',
            'checkoutName' => 'required|string|max:255'
        ]);

        try {
            Checkout::create($credentials);
            return response()->json(['message' => 'CheckOut Added Successfully'], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to add checkOut', 'error' => $e->getMessage()], 500);
        }
    }



    public function delete($id)
    {
        $checkOut = Checkout::findOrFail($id);
        try {
            $checkOut->delete();
            return response(['Message' => 'CheckOut Deleted Successfully'], 201);
        } catch (\Exception $exception) {
            return response()->json(['Message' => 'Error:' . $exception->getMessage()], 500);
        }
    }













    public function update(Request $request, $id)
    {
        $checkOut = Checkout::findOrFail($id);
        if ($request->has('checked')) {
            $checkOut->completed = $request->checked;
        }
        if ($request->has('unChecked')) {
            $checkOut->completed = $request->unChecked;
        }

        try {
            $checkOut->save();
            return response()->json(['message' => 'Record updated successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error:' . $e->getMessage()], 500);
        }
    }
}
