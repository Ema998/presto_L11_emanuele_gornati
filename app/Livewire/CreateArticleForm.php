<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use App\Jobs\ResizeImage;
use Illuminate\Support\Facades\File;
use App\Jobs\GoogleVisionSafeSearch;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\RemoveFaces;
use App\Models\Category;


class CreateArticleForm extends Component
{
    use WithFileUploads;

    public $images = [];

    public $temporary_images = [];

    public $article;

    public $categories = [];

    #[Validate('required|string|max:255', message: 'Il titolo  è obbligatorio')]
    public $title;

    #[Validate('required|string|max:500', message: 'La descrizione è obbligatoria')]
    public $description;

    #[Validate('required|numeric|min:0', message: 'Il prezzo è obbligatorio')]
    public $price;

    #[Validate('required|exists:categories,id', message: 'La categoria è obbligatoria')]
    public $category;


    public function mount()
    {
        $this->categories = Category::all();
    }

    public function cleanForm()
        {
            $this->title = '';
            $this->description = '';
            $this->price = '';
            $this->category = '';
            $this->images = [];
            $this->temporary_images = [];
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

        if(count($this->images) > 0) {
            foreach ($this->images as $image) {
                $newFileName = "articles/{$this->article->id}";
                $newImage = $this->article->images()->create([
                    'path' => $image->store($newFileName, 'public'),
                ]);
                //dispatch(new ResizeImage($newImage->path, 300, 300));
                //dispatch(new GoogleVisionSafeSearch($newImage->id));
                //dispatch(new GoogleVisionLabelImage($newImage->id));
                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 300, 300),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id)
                ])->dispatch($newImage->id);
            }

            File::deleteDirectory(storage_path('app/livewire-tmp/'));
        }

        session()->flash('message', 'Article created successfully.');
        $this->cleanForm();
        return redirect()->route('homepage');
    }

    public function render()
    {
        return view('livewire.create-article-form', [
            'categories' => $this->categories,
        ]);
    }

    public function updatedTemporaryImages()
    {
        $this->validate([
            'temporary_images.*' => 'image|max:1024',
            'temporary_images' => 'max:6'
        ]);

        $this->images = $this->temporary_images;
    }

    public function removeImage($key)
    {
        if(in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
            $this->images = array_values($this->images);
        }

        if(in_array($key, array_keys($this->temporary_images))) {
            unset($this->temporary_images[$key]);
            $this->temporary_images = array_values($this->temporary_images);
        }
    }
}