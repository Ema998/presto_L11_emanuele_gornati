<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;


class CreateArticleForm extends Component
{
    #[Validate('required|string|max:255', message: 'Il titolo  è obbligatorio')]
    public $title;

    #[Validate('required|string|max:500', message: 'La descrizione è obbligatoria')]
    public $description;

    #[Validate('required|numeric|min:0', message: 'Il prezzo è obbligatorio')]
    public $price;

    #[Validate('required|category', message: 'La categoria è obbligatoria')]
    public $category;

    public $article;

    public function store()
    {
       Article::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'category' => $this->category,
            'user_id' => Auth::id(),
        ]);

        $this->reset();

        session()->flash('message', 'Article created successfully.');
    }

    public function render()
    {
        return view('livewire.create-form-article');
    }
}