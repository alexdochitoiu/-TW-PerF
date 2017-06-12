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
    return view('pages.anunt_locuinta');
});

Route::get('/adauga_anunt',function () {
    if($user=Auth::user()){
        return view('pages.adauga_anunt');
    }
    else return redirect('/autentificare');
});
Route::get('/ajutor',function () {
    return view('pages.help');

});
Route::post('/trimite_mesaj_utilizator','SendMail@trimite_mesaj');
Route::get('/autentificare','SessionsController@create');
Route::post('/trimite_parola','SendMail@send_email');
Route::post('/autentificare','SessionsController@store');
Route::get('/inregistrare','RegistrationController@create');
Route::post('/inregistrare','RegistrationController@store');
Route::get('/logout','SessionsController@destroy');
Route::get('/autentificare/{provider}', 'SessionsController@redirectToProvider');
Route::get('/autentificare/{provider}/callback', 'SessionsController@handleProviderCallback');

Route::post('/adauga_anunt', [
        'uses' => 'AnuntController@postCreateAnunt',
        'as' => 'adauga.anunt'
    ]);

Route::get('/search', [
    'uses' => 'IndexController@search',
    'as' => 'search.anunt'
]);

Route::get('/anunturile_mele','IndexController@anunturileMele');
Route::get('/anunturile_mele/sterge/{id}','AnuntController@deleteAnunt');

Route::get('/anunturi/{id}', 'AnuntController@show');