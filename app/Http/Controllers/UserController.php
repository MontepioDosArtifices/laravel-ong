<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

  public function index()
  {
    $allUsers = User::all();
    return view('user-list', ['allUsers'=> $allUsers]);
  }

  public function create()
  {
    return view('user-create');
  }

  public function store(Request $request)
  {
    if ($request->password != $request->password_confirmed)
      return redirect()->route('user.create');

    $user = new User();
    $user->name     = $request->name;
    $user->cpf      = $request->cpf;
    $user->email    = $request->email;
    $user->phone    = $request->phone;
    $user->office    = $request->office;
    $user->password = Hash::make($request->password);
    $user->save();

    return redirect()->route('user.index');
  }

  public function show(User $user)
  {
    //
  }

  public function edit(User $user)
  {
    return view('user-edit', ['user' => $user]);
  }

  public function update(Request $request, User $user)
  {
    if ($request->password != $request->password_confirmed)
      return redirect()->route('user.create');

    if (!empty($request->password))
      $user->password = Hash::make($request->password);

    if (filter_var($request->email, FILTER_VALIDATE_EMAIL))
      $user->email = $request->email;

    $user->name   = $request->name;
    $user->cpf    = $request->cpf;
    $user->phone  = $request->phone;
    $user->office = $request->office;
    $user->save();

    return redirect()->route('user.index');
  }

  public function destroy(User $user)
  {
    $user->delete();

    return redirect()->route('user.index');
  }
}
