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


use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
Route::get('getclients', function () {
    $data['clients'] = [
        [
            'id' => 0,
            'name'=> 'Mihai',
            'age' => 24,
            'location' => 'Oradea'
        ],
        [
            'id' => 1,
            'name'=> 'Alexandru',
            'age' => 24,
            'location' => 'Oradea'
        ]
    ];
    return ($data);
});
Route::post('getclients', function (Request $request) {
    var_dump($request->input());
    return ;
});

