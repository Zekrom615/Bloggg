<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required',
            'post_id' => 'required'
        ]);

        Comment::create([
            'user_id' => auth()->id(),
            'post_id' => $request->post_id,
            'comment' => $request->comment,
        ]);

        return back();
    }

    public function edit(Comment $comment)
    {
        abort_if($comment->user_id !== auth()->id(), 403);
        return view('comments.edit', compact('comment'));
    }

    public function update(Request $request, Comment $comment)
    {
        abort_if($comment->user_id !== auth()->id(), 403);

        $request->validate([
            'comment' => 'required'
        ]);

        $comment->update([
            'comment' => $request->comment
        ]);

        return redirect('/')->with('success', 'Comment updated');
    }

    public function destroy(Comment $comment)
    {
        abort_if($comment->user_id !== auth()->id(), 403);

        $comment->delete();
        return back()->with('success', 'Comment deleted');
    }
}
