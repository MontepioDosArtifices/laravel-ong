<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
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
    $user->password = Hash::make($request->password);
    $user->save();

    return redirect()->route('home');
  }
}
