<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

     public $categories = [
        'elettronica',
        'abbigliamento',
        'giocattoli',
        'libri',
        'sport',
        'casa',
        'giardino',
        'auto',
        'musica',
     ];

    public function run(): void
    {
        foreach ($this->categories as $category) {
            Category::create([
                'name' => $category,
            ]);
        }

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
