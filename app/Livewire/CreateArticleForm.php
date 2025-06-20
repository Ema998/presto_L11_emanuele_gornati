<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;


class CreateArticleForm extends Component
{
    use WithFileUploads;

    public $image = [];

    public $temporary_images;

    #[Validate('required|string|max:255', message: 'Il titolo  è obbligatorio')]
    public $title;

    #[Validate('required|string|max:500', message: 'La descrizione è obbligatoria')]
    public $description;

    #[Validate('required|numeric|min:0', message: 'Il prezzo è obbligatorio')]
    public $price;

    #[Validate('required|category', message: 'La categoria è obbligatoria')]
    public $category;

    public $article;

    public function cleanForm()
        {
            $this->title = '';
            $this->description = '';
            $this->price = '';
            $this->category = '';
            $this->image = [];
        }
    public function store()
    {
        $this->validate();
        $this->article = Article::create([
                        'title' => $this->title,
                        'description' => $this->description,
                        'price' => $this->price,
                        'category_id' => $this->category,
                        'user_id' => Auth::id(),
        ]);

        if(count($this->image) > 0) {
            foreach ($this->image as $img) {
                $this->article->images()->create([
                    'path' => $img->store('articles', 'public'),
                ]);
            }
        }

        session()->flash('message', 'Article created successfully.');
        $this->cleanForm();
    }

    public function render()
    {
        return view('livewire.create-form-article');
    }

    public function updatetemporaryImages()
    {
        if($this->validate([
            'temporary_images.*' => 'image|max:1024', // 1MB Max
            'temporary_images' => 'max:6'
        ])) {
            foreach ($this->temporary_images as $image) {
                $this->image[] = $image;
            }
        }
    }

    public function removeImage($key)
    {
        if(in_array($key, array_keys($this->image))) {
            unset($this->image[$key]);
        }
    }
}