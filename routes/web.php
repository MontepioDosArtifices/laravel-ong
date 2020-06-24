<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('home'); })->name('home');

Route::get('/dashboard', function() { return view('dashboard'); })->name('dashboard');

Route::get('/dashboard/login/', function () { return view('user-login'); })->name('user.login');
Route::post('/dashboard/login/enviado', 'LoginController@index')->name('user.login.send');

Route::resource('dashboard/usuarios', 'UserController')
  ->names('user')
  ->parameters(['usuarios' => 'user']);

Route::resource('dashboard/despesas/categoria', 'CategoryExpenseController')
  ->names('category')
  ->parameters(['categoria' => 'category']);

Route::resource('dashboard/despesas', 'ExpenseController')
  ->names('expense')
  ->parameters(['despesas' => 'expense']);


Route::get('/dashboard/doacoes/', function () { return view('donate-list'); })->name('donate.list');

Route::get('/dashboard/calendario/', function () { return view('calendar'); })->name('calendar');

Route::get('/logout', 'SessionController@destroy')->name('logout');

