<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\SessionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
  public function createForm()
  {
    return view('user-create');
  }

  public function create(Request $request)
  {
    if ($request->password != $request->password_confirmed) return redirect()->route('user.create.form');

    $user = new User();
    $user->name = $request->name;
    $user->cpf = $request->cpf;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->password = Hash::make($request->password);
    $user->save();

    return redirect()->route('home');
  }

  public function login(Request $request)
  {
    $credentials = $request->only('email', 'password');

    if (!Auth::attempt($credentials)) return redirect()->route('user.login');

    $this->createSession($request->email);

    return redirect()->intended('dashboard');
  }

  public function listAll()
  {
    $user = new User();
    $allUsers = $user->getAllUsers();

    return view('user-list', ['allUsers' => $allUsers]);
  }

  public function createSession($email)
  {
    $user = new User();
    $userData = $user->searchAllUserData($email);

    $sessionController = new SessionController();
    $sessionController->create($userData);
  }
}
