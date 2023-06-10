<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Validation\Rule;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'restaurant_id' => [
                'required',
                Rule::unique('comments')->where(function ($query) use ($request) {
                    return $query->where('client_id', $request->client_id);
                }),
            ],
            'comment' => 'required',
        ]);

        // Store the comment
        $comment = new Comment();
        $comment->client_id = $request->client_id;
        $comment->restaurant_id = $request->restaurant_id;
        $comment->comment = $request->comment;
        $comment->save();
        return redirect()->back();
    }
}
