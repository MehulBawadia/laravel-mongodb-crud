<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::all(),
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
   {
       $post = new Post;

       $post->title = $request->title;
       $post->body = $request->body;
       $post->slug = Str::slug($request->slug);

       $post->save();

       return redirect('/posts');
   }

    public function show($id)
    {
        return view('posts.show', [
            'post' => Post::find($id),
        ]);
    }

    public function edit($id)
    {
        return view('posts.edit', [
            'post' => Post::find($id),
        ]);
    }

    public function update(Request $request, $postId)
    {
        $post = Post::find($postId);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug = Str::slug($request->slug);
        $post->save();

        return redirect('/posts');
    }

    public function destroy($postId)
    {
        $post = Post::find($postId);
        $post->delete();

        return redirect('/posts');
    }
}
