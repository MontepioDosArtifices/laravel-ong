<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
  public function create(Array $list = [])
  {
    foreach ($list as $key => $value) {
      session()->put($key, $value);
    }
  }

  public function destroy()
  {
    Session::flush();
    return view('user-login');
  }
}
