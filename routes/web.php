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


Route::get('/', function () {
    $links = [
        ['title' => 'Characters', 'route' => 'Characters'],
        ['title' => 'Movies', 'route' => 'Movies'],
        ['title' => 'Tv', 'route' => 'Tv'],
    ];


    $data = [
        'links' => $links
    ];

    return view('home', $data);
});

Route::get('/Characters', function () {

    return view('Characters');
})->name('Characters');

Route::get('/Movies', function () {

    return view('Movies');
})->name('Movies');

Route::get('/Tv', function () {

    return view('Tv');
})->name('Tv');
