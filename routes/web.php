<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', \App\Http\Controllers\ArticleController::class . '@create');
Route::get('/ajouterArticle', \App\Http\Controllers\ArticleController::class . '@store');
Route::get('/listeArticle', \App\Http\Controllers\ArticleController::class . '@show');
Route::get('/detailArticle/{id}-{slug}', \App\Http\Controllers\ArticleController::class . '@retail')->name('articles.retail');