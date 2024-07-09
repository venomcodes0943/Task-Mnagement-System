<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;


class CommentController extends Controller
{

    public function create(Request $request)
    {
        $credentials = $request->validate([
            'user_id' => 'required|integer',
            'task_id' => 'required|integer',
            'taskComment' => 'required|string|max:255'
        ]);

        try {
            Comment::create($credentials);
            return response()->json(['message' => 'Comment created successfully'], 201);
        } catch (\Exception $exception) {
            return response()->json(['message' => 'Error: ' . $exception->getMessage()], 500);
        }
    }





    public function delete($id)
    {
        try {
            $comment = Comment::findOrFail($id);
            $comment->delete();
            return response()->json(['message' => 'Comment Deleted Successfully']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error:' . $e->getMessage()], 500);
        }

    }



}
