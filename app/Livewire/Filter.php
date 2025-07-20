<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use App\Models\Category;

class Filter extends Component
{
    public $selectedCategories = [];
    public $articles = [];
    public $categories = [];

    public function mount()
    {
        $this->articles = Article::all();
        $this->categories = Category::all();
    }

    public function getFilteredArticlesProperty()
    {
        if ($this->selectedCategories) {
            return collect($this->articles)->filter(function ($article) {
                return in_array($article->category->name, $this->selectedCategories);
            });
        }

        return $this->articles;
    }

    public function render()
    {
        return view('livewire.filter', [
            'filteredArticles' => $this->filteredArticles,
        ]);    
    }
}
