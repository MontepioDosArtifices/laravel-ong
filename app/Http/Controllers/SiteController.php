<?php

namespace App\Http\Controllers;

use App\Courses;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{

  public function index()
  {
    $posts = Post::select('*')->orderBy('id', 'desc')->take(3)->get();
    $courses = Courses::select('*')->orderBy('id', 'desc')->take(3)->get();

    return view('site', ['posts' => $posts, 'courses' => $courses]);
  }

}
