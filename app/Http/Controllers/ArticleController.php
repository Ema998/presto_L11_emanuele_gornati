<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticleController extends Controller
{
    public function createArticle()
    {
        return view('article.create');
    }

    public function index()
    {
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        return view('article.index', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }
}
