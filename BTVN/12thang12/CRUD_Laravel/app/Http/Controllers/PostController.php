<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function  index()
    {
        $posts = Post::paginate(10);

        return view ('post.index', compact('posts'));
    }
    public function create()
    {
        return view('post.add');
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $posts = Post::create($validateData);

        return redirect()->route('post.index', $posts)
            ->with('success', 'Post created successfully.');
    }
    public function show($id)
    {
        $post = Post::find($id);

        return view('post.detail', compact('post'));
    }
    public function edit(string $id)
    {
        $post = Post::find($id);

        return view('post.edit', compact('post'));
    }
    public function update(Request $request,string $id)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post = Post::find($id);
        $post->update($validateData);

        return redirect()->route('post.index', $post)
            ->with('success', 'Post updated successfully.');
    }
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('post.index')
            ->with('success', 'Post deleted successfully.');
    }
}
