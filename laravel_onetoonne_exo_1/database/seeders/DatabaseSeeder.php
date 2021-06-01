<?php

namespace Database\Seeders;

use App\Models\Profil;
use App\Models\User;
use Carbon\Factory;
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
        User::factory(15)->create;
        Profil::Factory(15)->create;
    }
}
