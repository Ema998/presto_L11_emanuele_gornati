<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

Route::get('/', [PublicController::class, 'homepage']) ->name('homepage');
Route::get('search/article', [PublicController::class, 'searchArticles'])->name('article.search');

Route::get('/article/create', [ArticleController::class, 'createArticle'])->name('article.create')->middleware('auth');
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('/show/article/{article}', [ArticleController::class, 'show'])->name('article.show');

Route::get('revisor/index', [RevisorController::class, 'index'])->name('revisor.index')->middleware('isRevisor');
Route::patch('/accept/{article}', [RevisorController::class, 'accept'])->name('accept');
Route::patch('/reject/{article}', [RevisorController::class, 'reject'])->name('reject');
Route::get('/revisor/request', [RevisorController::class, 'becomeRevisor'])->name('becomeRevisor')->middleware('auth');
Route::get('/makeRevisor/{user}', [RevisorController::class, 'makeRevisor'])->name('makeRevisor');