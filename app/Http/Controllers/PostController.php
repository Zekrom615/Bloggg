<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('user_id', auth()->id())->latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect('/posts')->with('success', 'Post created!');
    }

    public function edit(Post $post)
    {
        abort_if($post->user_id !== auth()->id(), 403);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        abort_if($post->user_id !== auth()->id(), 403);

        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post->update($request->only('title','content'));

        return redirect('/posts')->with('success', 'Post updated!');
    }

    public function destroy(Post $post)
    {
        abort_if($post->user_id !== auth()->id(), 403);

        $post->delete();
        return redirect('/posts')->with('success', 'Post deleted!');
    }
}
