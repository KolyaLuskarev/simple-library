<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Author::factory(5)->create()->each(function ($author) {
        \App\Models\Book::factory(2)->create(['author_id' => $author->id]);
    });
    }
}
