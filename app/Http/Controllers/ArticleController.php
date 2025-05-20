<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController
{
    public function create()
    {
        return view('article.create');
    }
}
