<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
  public function create($user)
  {
    return Session::put('name', $user->name);
  }

  public function destroy()
  {
    Session::flush();
    return redirect()->route('user.login');
  }
}
