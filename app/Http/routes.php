<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('lol', function () {
    return view('index');
});

// Route::get('create-travel', function () {
//     return view('welcome');
// });

// Route::post('wasd', array('before' => 'csrf', function () {}));

Route::get('create-travel', ['uses' => 'TravelsController@create']);

Route::post('create-travel', [ 'as' => 'create-travel',
                               'uses' => 'TravelsController@store',
                               'before' => 'csrf' ]);

Route::get('amazing', function () {
    return view('amazing');
});
