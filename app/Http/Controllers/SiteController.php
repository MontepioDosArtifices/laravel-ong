<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{

  public function index()
  {
    $posts = DB::select('select * from posts limit ?', [3]);
    return view('site', ['posts' => $posts]);
  }

}
