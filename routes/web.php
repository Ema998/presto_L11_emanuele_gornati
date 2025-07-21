<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;
use Laravel\Fortify\Fortify;

Route::get('/', [PublicController::class, 'homepage']) ->name('homepage');
Route::get('search/article', [PublicController::class, 'searchArticles'])->name('article.search');
Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('setLocale');

Route::get('/article/create', [ArticleController::class, 'createArticle'])->name('article.create')->middleware('auth');
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('/show/article/{article}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/category/{category}', [ArticleController::class, 'byCategory'])->name('byCategory');

Route::get('revisor/index', [RevisorController::class, 'index'])->name('revisor.index')->middleware('is_revisor');
Route::patch('/accept/{article}', [RevisorController::class, 'accept'])->name('accept')->middleware('is_revisor');
Route::patch('/reject/{article}', [RevisorController::class, 'reject'])->name('reject')->middleware('is_revisor');
Route::get('/revisor/request', [RevisorController::class, 'becomeRevisor'])->name('becomeRevisor')->middleware('auth');
Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('makeRevisor');