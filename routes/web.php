<?php

use Illuminate\Http\Request;
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
    dd(env('DB_HOST'));
    return view('welcome');
});

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit dolores provident necessitatibus animi culpa. In, cupiditate nam! Hic reprehenderit dolore, accusantium veritatis soluta est culpa',
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'alias similique quasi minima quas quia id nisi nesciunt maiores, nemo, laboriosam ad. Quam eligendi beatae aliquid dolor. Quos corrupti impedit quibusdam alias aliquam ipsum?',
            ],
        ],
    ]);
});

//
