<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'SiteController@index')->name('site');

Route::get('postagem', 'SitePostController@index')->name('site.post');
Route::get('postagem/{slug}', 'SitePostController@show')->name('site.post.show');

Route::get('/doar', 'Services\PagarmeRequestService@createForm')->name('donation.form');
Route::post('/doar', 'Services\PagarmeRequestService@createTransaction')->name('donation.send');

Route::get('/dashboard', 'DonateController@indexCustomers')->name('dashboard');
Route::get('/dashboard/calendario', function () { return view('calendar'); })->name('calendar');

Route::get('/dashboard/login/', function () { return view('user-login'); })->name('user.login');
Route::post('/dashboard/login/enviado', 'LoginController@index')->name('user.login.send');

Route::get('/dashboard/perfil/{user}', 'ProfileController@show')->name('user.profile');

Route::group(['middleware' => 'usersession'], function () {

  Route::resource('events', 'EventController')
    ->names('event')
    ->parameters(['event' => 'event']);

  Route::resource('dashboard/despesas/categoria', 'CategoryExpenseController')
    ->names('category')
    ->parameters(['categoria' => 'category']);

  Route::resource('dashboard/despesas', 'ExpenseController')
    ->names('expense')
    ->parameters(['despesas' => 'expense']);

  Route::resource('dashboard/usuarios', 'UserController')
    ->names('user')
    ->parameters(['usuarios' => 'user']);

  Route::resource('dashboard/postagem', 'PostController')
    ->names('post')
    ->parameters(['postagem' => 'post']);

  Route::resource('dashboard/cursos', 'CoursesController')
    ->names('course')
    ->parameters(['cursos' => 'course']);

    Route::resource('dashboard/alunos', 'StudentController')
      ->names('student')
      ->parameters(['alunos' => 'student']);

  Route::get('/dashboard/doacoes/', 'DonateController@index')->name('donate.list');

});

Route::get('/logout', 'SessionController@destroy')->name('logout');
