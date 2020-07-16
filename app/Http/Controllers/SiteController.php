<?php

namespace App\Http\Controllers;

use App\Courses;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Contracts\Session\Session;

class SiteController extends Controller
{

  public function index()
  {
    $posts = Post::select('*')->orderBy('id', 'desc')->take(3)->get();
    $courses = Courses::select('*')->orderBy('id', 'desc')->take(3)->get();

    return view('site', ['posts' => $posts, 'courses' => $courses]);
  }

  public function sendMail(Request $request)
  {
    $fields = $request->validate([
      'name'=> 'required|between:3,40',
      'email' => 'required|email|between:10,50',
      'bodyMessage' => 'required|min:5'
    ]);

    Mail::to('montepioartifices@gmail.com')->send(new ContactMail($fields));

    $request->session()->flash('alert-success', 'Seu email foi enviado com sucesso!');
    return redirect()->back();
  }

}
