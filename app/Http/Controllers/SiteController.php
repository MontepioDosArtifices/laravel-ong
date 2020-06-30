<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{

  public function index()
  {
    $posts = Post::select('*')->orderBy('id', 'desc')->take(3)->get();
    return view('site', ['posts' => $posts]);
  }

}
