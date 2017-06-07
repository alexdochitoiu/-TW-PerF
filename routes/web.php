<?php

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

Route::get('/', 'IndexController@index');
Route::get('/anunt', function () {
    return view('pages.anunt');
});

Route::get('/adauga_anunt',function () {
    return view('pages.adauga_anunt');
});
Route::get('/ajutor',function () {
    return view('pages.help');

});

Route::get('/autentificare',function () {
    return view('pages.autentificare');
});
Route::get('/inregistrare',function () {
    return view('pages.inregistrare');
});

Route::post('/inregistrare', [
    'uses' => 'UserController@register',
    'as' => 'register']);