<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
use App\Models\Article;
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

Route::get('/', [HomeController::class, 'index'])-> name('home');
Route::get('/portfolio', [PortfolioController::class, 'index'])-> name('portfolio');
Route::get('/contact', [ContactController::class, 'index'])-> name('contact');
Route::get('/blog', [ArticleController::class, 'index'])-> name('blog');
Route::get('/back', [BackController::class, 'index'])-> name('back');
Route::post('create.blog', [ArticleController::class, 'create']);
