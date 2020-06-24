<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{

  public function index()
  {
    $posts = Post::all();
    return view('post-list', ['posts' => $posts]);
  }

  public function create()
  {
    return view('post-create');
  }

  public function store(Request $request)
  {
    if (empty($request->title) || empty($request->body))
      return redirect()->route('post.create');

    $post = new Post();
    $post->title = $request->title;
    $post->body  = $request->body;
    $post->slug = Str::slug($request->title);
    $post->save();

    return redirect()->route('post.index');
  }

  public function show(Post $post)
  {
    //
  }

  public function edit(Post $post)
  {
    //
  }

  public function update(Request $request, Post $post)
  {
    //
  }

  public function destroy(Post $post)
  {
    $post->delete();
    return redirect()->route('post.index');
  }
}
