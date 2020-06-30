<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Support\Facades\DB;

class SitePostController extends Controller
{

    public function index()
    {
      $posts = Post::select('*')->orderBy('id', 'desc')->get();
      return view('post-list-site', ['posts' => $posts]);
    }

    public function show($slug)
    {
      $post = Post::select('*')->where('slug', $slug)->first();
      return view('post-show', ['post' => $post]);
    }

}
