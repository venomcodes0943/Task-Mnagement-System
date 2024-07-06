<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
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
