<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('home'); })->name('home');

Route::get('/dashboard', function() { return view('dashboard'); })->name('dashboard');

Route::get('/dashboard/login/', function () { return view('user-login'); })->name('user.login');
Route::post('/dashboard/login/enviado', 'UserController@login')->name('user.login.send');

Route::get('/dashboard/usuarios', 'UserController@listAll')->name('users.list');
Route::get('/dashboard/usuarios/cadastro', 'UserController@createForm')->name('user.create.form');
Route::post('/dashboard/usuarios/cadastro/enviado/', 'UserController@create')->name('user.create');
Route::get('/dashboard/usuarios/editar/{user}', 'UserController@editForm')->name('user.edit.form');
Route::put('/dashboard/usuarios/editar/{user}/enviado', 'UserController@edit')->name('user.edit');

Route::get('/dashboard/despesas/categoria/cadastro', 'CategoryExpenseController@createForm')->name('category.expenses.form');
Route::post('/dashboard/despesas/categoria/cadastro/enviado', 'CategoryExpenseController@registerCategory')->name('category.expenses.create');
Route::get('/dashboard/despesas/cadastro', 'ExpenseController@createForm')->name('expenses.form');
Route::post('/dashboard/despesas/cadastro/enviado', 'ExpenseController@create')->name('expenses.create');
Route::get('/dashboard/despesas', 'ExpenseController@listExpenses')->name('expenses.list');
Route::get('/dashboard/despesas/categoria', 'ExpenseController@listCategories')->name('expenses.category.list');
Route::get('/dashboard/despesas/categoria/editar/{category}', 'CategoryExpenseController@editForm')->name('category.edit.form');
Route::put('/dashboard/despesas/categoria/editar/{category}/enviado', 'CategoryExpenseController@edit')->name('category.edit');

Route::get('/dashboard/doacoes/', function () { return view('donate-list'); })->name('donate.list');

Route::get('/dashboard/calendario/', function () { return view('calendar'); })->name('calendar');

Route::get('/logout', 'SessionController@destroy')->name('logout');

