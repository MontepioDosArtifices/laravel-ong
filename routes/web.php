<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('home'); })->name('home');

Route::get('/dashboard/login/', function () { return view('user-login'); })->name('user.login');

Route::get('/dashboard/usuarios/cadastro', 'UserController@createForm')->name('user.create.form');
Route::post('/dashboard/usuarios/cadastro/enviado/', 'UserController@create')->name('user.create');

Route::get('/dashboard/despesas/categoria/cadastro', 'CategoryExpenseController@createForm')->name('category.expenses.form');
Route::post('/dashboard/despesas/categoria/cadastro/enviado', 'CategoryExpenseController@registerCategory')->name('category.expenses.create');

Route::get('/dashboard/despesas/cadastro', 'ExpenseController@createForm')->name('expenses.form');
Route::post('/dashboard/despesas/cadastro/enviado', 'ExpenseController@create')->name('expenses.create');
