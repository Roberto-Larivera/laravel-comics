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
    $linkHeader = [
        [
            'title'=> 'characters',
            'url'=> '#nogo'
        ],
        [
            'title'=> 'comics',
            'url'=> '#nogo'
        ],
        [
            'title'=> 'movies',
            'url'=> '#nogo'
        ],
        [
            'title'=> 'tv',
            'url'=> '#nogo'
        ],
        [
            'title'=> 'games',
            'url'=> '#nogo'
        ],
        [
            'title'=> 'collectibles',
            'url'=> '#nogo'
        ],
        [
            'title'=> 'videos',
            'url'=> '#nogo'
        ],
        [
            'title'=> 'fans',
            'url'=> '#nogo'
        ],
        [
            'title'=> 'news',
            'url'=> '#nogo'
        ],
        [
            'title'=> 'shop',
            'url'=> '#nogo'
        ],
    ];
    return view('home',
    [
        'comics'=> config('comics'),
        'linkHeader' => $linkHeader
    ]
);
})->name('home');