<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

  public function index(Request $request, SessionController $session)
  {
    $credentials = $request->only('email', 'password');

    if (!Auth::attempt($credentials)) return redirect()->route('user.login');

    $user = Auth::getUser();

    $session->create($user);

    return redirect()->intended('dashboard');
  }

}
