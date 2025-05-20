<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class RevisorController extends Controller
{
    public function index()
    {
        $articlesToCheck = Article::where('is_accepted', null)->first();
        return view('revisor.index');
    }

    public function accept(Article $article)
    {
        $article->setAccepted(true);
        return redirect()->route('revisor.index')->with('success', 'Articolo accettato.');
    }

    public function reject(Article $article)
    {
        $article->setAccepted(false);
        return redirect()->route('revisor.index')->with('success', 'Articolo rifiutato.');
    }
}
