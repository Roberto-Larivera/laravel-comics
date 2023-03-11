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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/template', function () {
    return view('layout.app');
});

Route::get('/', function () {
    return view(
        'home',
        [
            'comics' => config('comics'),
            'linkHeader' => config('headerLink')
        ]
    );
})->name('home');

Route::get('/comic/{index}', function ($index) {
    $comics = config('comics');
    $comic = $comics[$index];
    //dd($comic);
    return view(
        'comic',
        [
            'comics' => $comic,
            'linkHeader' => config('headerLink')
        ]
    );
})->name('comic');
