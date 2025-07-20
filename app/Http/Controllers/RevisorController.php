<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use App\Mail\BecomeRevisor;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index()
    {
        $articlesToCheck = Article::where('is_accepted', null)->first();
        return view('revisor.index', compact('articlesToCheck'));
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

    public function becomeRevisor()
    {
        Mail::to('staff@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->route('homepage')->with('message', 'Richiesta inviata; Riceverai una risposta via email.');
    }

    public function makeRevisor(User $user)
    {
        Artisan::call('app:make-user-revisor', ['email' => $user->email]);
        return redirect()->back();
    }
}
