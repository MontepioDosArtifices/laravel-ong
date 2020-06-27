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
    if (empty($request->title) || empty($request->body) || empty($request->image))
      return redirect()->route('post.create');

    $imageUpload = new ImageUploadController();
    $upload = $imageUpload->store($request->file('image'), 'posts');

    if(!$upload) return redirect()->back();

    $post = new Post();
    $post->title = $request->title;
    $post->body  = $request->body;
    $post->slug = Str::slug($request->title);
    $post->image = $upload;
    $post->save();

    return redirect()->route('post.index');
  }

  public function show(Post $post)
  {
    //
  }

  public function edit(Post $post)
  {
    return view('post-edit', ['post' => $post]);
  }

  public function update(Request $request, Post $post)
  {
    $post->title = $request->title;
    $post->body = $request->body;
    $post->slug = Str::slug($request->slug);

    if (!empty($request->image))
      $post->image = $request->image;

    $post->save();

    return redirect()->route('post.index');
  }

  public function destroy(Post $post)
  {
    $post->delete();
    return redirect()->route('post.index');
  }
}
