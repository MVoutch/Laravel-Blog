<?php

use App\Models\Article;
use App\Models\Tags;
use App\Models\User;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
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

Route::get('/', [ArticleController::class, 'index'] )->name('home');
Route::post('/article/create', [ArticleController::class, 'addArticle'] );
Route::get('/article/create', [ArticleController::class, 'create'] )->middleware('admin');
Route::get('/article/{slot:slug}', [ArticleController::class, 'view'])->name('article');
Route::post('/article/{slot:slug}/comment', [ArticleController::class, 'addComment']);

Route::get('/register', [RegisterController::class, 'reg'] )->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'] )->middleware('guest');
Route::post('/logout', [SessionController::class, 'destroy'] )->middleware('auth');

Route::get('/login', [SessionController::class, 'login'] )->middleware('guest');
Route::post('/login', [SessionController::class, 'session'] )->middleware('guest');


