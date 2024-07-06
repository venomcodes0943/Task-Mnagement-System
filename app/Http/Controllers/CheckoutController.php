<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
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
