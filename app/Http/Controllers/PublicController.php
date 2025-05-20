<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PublicController
{
    public function homepage()
    {
        $articles = Article::take(6)->orderBy('created_at', 'desc')->get();
        return view('homepage', compact('articles'));
    }
}
