<?php

namespace Database\Seeders;

use App\Http\Controllers\AlbumController;
use App\Models\Album;
use App\Models\Photo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        // Photo::factory(5)->create();
        // Album::factory(5)->create();
        $this->call(AlbumSeeder::class);
        // $this->call(PhotoSeeder::class);
    }
}
