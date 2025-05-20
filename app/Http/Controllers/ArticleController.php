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
        $articles = Article::orderBy('created_at', 'desc');
        return view('article.index', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }
}
