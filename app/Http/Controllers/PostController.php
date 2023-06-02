<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create ()
    {
        return view('posts.create');
    }

    public functions store(Request $request)
    {
        $post = new Post;
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();
        
        return redirect()->route('posts.show', $post->id);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view ('posts.show', compact('post'));
    }

    public function edit ($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        return redirect()->route('posts.show', $post->id);
    }

    public function destroy($ud)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index');
    }
}
