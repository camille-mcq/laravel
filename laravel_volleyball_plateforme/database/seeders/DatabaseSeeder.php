<?php

namespace Database\Seeders;

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
        //\App\Models\User::factory(10)->create();
        $this->call(RoleSeeder::class);
        $this->call(ContinentSeeder::class);
        $this->call(GenreSeeder::class);
        $this->call(EquipeSeeder::class);
        $this->call(JoueurSeeder::class);
        $this->call(PhotoSeeder::class);
        
    }
}
