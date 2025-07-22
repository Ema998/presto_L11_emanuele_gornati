<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Jobs\ResizeImage;

class CreateArticleForm extends Component
{
    use WithFileUploads;

    public $title = '';
    public $description = '';
    public $price = '';
    public $category = '';
    public $categories = [];

    public $temporary_images = [];
    public $images = [];

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function updatedTemporaryImages()
    {
        $this->validate([
            'temporary_images.*' => 'image|max:1024',
        ]);

        foreach ($this->temporary_images as $image) {
            $this->images[] = $image;
        }
        
        $this->temporary_images = [];
    }

    public function removeImage($index)
    {
        unset($this->images[$index]);
        $this->images = array_values($this->images);
    }

    public function store()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'price' => 'required|numeric|min:0',
            'category' => 'required|exists:categories,id',
        ]);

        $article = Article::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category,
            'user_id' => Auth::id(),
        ]);

        foreach ($this->images as $image) {
            $path = $image->store("articles/{$article->id}", 'public');
            $article->images()->create([
                'path' => $path,
            ]);

            ResizeImage::dispatch($path, 300, 300);
        }

        File::deleteDirectory(storage_path('app/livewire-tmp/'));

        session()->flash('message', 'Articolo creato con successo!');
        return redirect()->route('homepage');
    }

    public function render()
    {
        return view('livewire.create-article-form');
    }
}
