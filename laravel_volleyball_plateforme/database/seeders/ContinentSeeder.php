<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("continents")->insert([
            "nom" => "sans continent"
        ]);
        DB::table("continents")->insert([
                "nom"=>"Amérique du Nord"    
            ]);
        DB::table("continents")->insert([
                "nom"=>"Amérique du Sud"    
            ]);
        DB::table("continents")->insert([
                "nom"=>"Europe"    
            ]);
        DB::table("continents")->insert([
                "nom"=>"Asie"    
            ]);
        DB::table("continents")->insert([
                "nom"=>"Océanie"    
            ]);
    }
}
