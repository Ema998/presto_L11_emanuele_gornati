<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;


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

    public function byCategory(Category $category)
    {
        $articles = $category->articles()->where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        return view('article.byCategory', compact('category', 'articles'));
    }
}
