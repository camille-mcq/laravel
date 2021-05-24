<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Commentaire;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Article::factory(5)->create();
        Commentaire::factory(5)->create();
    }
}
