<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PublicController
{
    public function homepage()
    {
        $articles = Article::where('is_accepted', true)->take(6)->orderBy('created_at', 'desc')->get();
        return view('homepage', compact('articles'));
    }

    public function searchArticles(Request $request)
    {
        $query = $request->input('query');
        $articles = Article::where('is_accepted', true)->search($query)->orderBy('created_at', 'desc')->paginate(10);
        return view('article.searched', [
            'articles' => $articles,
            'query' => $query,
        ]);
    }
}
