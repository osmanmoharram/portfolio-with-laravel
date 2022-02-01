<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::get('/', fn() => view('pages.home') );

Route::post('/', [MessageController::class, 'store']);

Route::get('/about', fn() => view('pages.about') );

Route::get('/about/download', fn() => Response::download(public_path('cv.pdf', 'Osman Resume')));
