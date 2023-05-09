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

    $comics = config('comics');


    $links = [
        ['title' => 'Characters', 'route' => 'Characters'],
        ['title' => 'Movies', 'route' => 'Movies'],
        ['title' => 'Tv', 'route' => 'Tv'],
    ];


    $images = [
        ['name' => 'mimes:resources/img/buy-comics-merchandise.png'],
        ['name' => 'buy-comics-merchandise.png'],
    ];

    $footerLinks = [
        ['name' => 'Comics'],
        ['name' => 'Movies'],
        ['name' => 'Tv'],
        ['name' => 'Games'],
        ['name' => 'Videos'],
        ['name' => 'News'],
        ['name' => 'Shop'],
        ['name' => 'Jobs'],
    ];

    $data = [
        'links' => $links,
        'comics' => $comics,
        'images' => $images,
        'footerLinks' => $footerLinks
    ];


    return view('home', $data);
});

Route::get('/Characters', function () {

    return view('Characters');
})->name('Characters');

Route::get('/Movies', function () {

    $links = [
        ['title' => 'Characters', 'route' => 'Characters'],
        ['title' => 'Movies', 'route' => 'Movies'],
        ['title' => 'Tv', 'route' => 'Tv'],
    ];

    $footerLinks = [
        ['name' => 'Comics'],
        ['name' => 'Movies'],
        ['name' => 'Tv'],
        ['name' => 'Games'],
        ['name' => 'Videos'],
        ['name' => 'News'],
        ['name' => 'Shop'],
        ['name' => 'Jobs'],
    ];

    $data = [
        'links' => $links,
        'footerLinks' => $footerLinks
    ];

    return view('Movies', $data);
})->name('Movies');

Route::get('/Tv', function () {

    return view('Tv');
})->name('Tv');
