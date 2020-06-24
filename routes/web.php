<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('home'); })->name('home');

Route::get('/doar', 'Services\PagarmeRequestService@createForm')->name('donation.form');
Route::post('/doar/enviado', 'Services\PagarmeRequestService@createTransaction')->name('donation.send');

Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');

Route::get('/dashboard/login/', function () { return view('user-login'); })->name('user.login');
Route::post('/dashboard/login/enviado', 'LoginController@index')->name('user.login.send');

Route::group(['middleware' => 'usersession'], function () {

  Route::get('/dashboard', function() { return view('dashboard'); })->name('dashboard');

  Route::resource('dashboard/usuarios', 'UserController')
    ->names('user')
    ->parameters(['usuarios' => 'user']);

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

});

Route::get('/logout', 'SessionController@destroy')->name('logout');
