<?php

use App\Services\PagarmeRequestService;
use Illuminate\Support\Facades\Route;

// Route::get("", function () {
//   $pagarmeService = new PagarmeRequestService();
//   $transaction = $pagarmeService->getCustomers();

//   dd($transaction);
// });

Route::get('/', function () {
  return view('home');
})->name('home');

Route::get('/doar', 'Services\PagarmeRequestService@createForm')->name('donation.form');
Route::post('/doar/enviado', 'Services\PagarmeRequestService@createTransaction')->name('donation.send');

Route::get('/dashboard', function () {
  return view('dashboard');
})->name('dashboard');

Route::get('/dashboard/login/', function () {
  return view('user-login');
})->name('user.login');
Route::post('/dashboard/login/enviado', 'UserController@login')->name('user.login.send');

Route::get('/dashboard/usuarios/cadastro', 'UserController@createForm')->name('user.create.form');
Route::post('/dashboard/usuarios/cadastro/enviado/', 'UserController@create')->name('user.create');

Route::get('/dashboard/usuarios/busca', function () {
  return view('user-search');
})->name('user.search');

Route::get('/dashboard/doacoes/', function () {
  return view('donate-list');
})->name('donate.list');

Route::get('/dashboard/calendario/', function () {
  return view('calendar');
})->name('calendar');
