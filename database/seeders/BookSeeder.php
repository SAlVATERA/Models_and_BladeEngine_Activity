<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run()
    {
        Book::factory()->count(20)->create();
    }
}

//php artisan db:seed --class=BookSeeder
// gamitin mo toh para mag generate nang books