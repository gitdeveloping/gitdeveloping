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

Route::group(['domain' => env('DOMAIN')], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();
});

Route::group(['domain' => 'app.'.env('DOMAIN'), 'middleware' => ['auth']], function () {
    Route::get('/', 'App\HomeController@index')->name('home');
    Route::get('/challenges/{challenge}', 'App\HomeController@challenge')->name('challenge.view');

});

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->middleware('routeRestrictor:username,password');
