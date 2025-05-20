<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function createArticle()
    {
        return view('article.create');
    }
}
