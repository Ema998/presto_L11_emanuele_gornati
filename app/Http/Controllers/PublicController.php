<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PublicController
{
    public function homepage()
    {
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        return view('homepage', compact('articles'));
    }

    public function searchArticles(Request $request)
    {
        $query = $request->input('query');
       $articles = Article::where('is_accepted', true)
                            ->where(function ($queryBuilder) use ($query) {
                                $queryBuilder->where('title', 'like', '%' . $query . '%')
                                ->orWhere('description', 'like', '%' . $query . '%');
                            })  
                            ->orderBy('created_at', 'desc')
                            ->paginate(10);
        return view('article.searched', [
            'articles' => $articles,
            'query' => $query,
        ]);
    }

    public function setlanguage($lang)
    {
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
