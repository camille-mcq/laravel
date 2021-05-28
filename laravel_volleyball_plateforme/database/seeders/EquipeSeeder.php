<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("equipes")->insert([
            "nom" => "sans equipe",
            "ville" => "",
            "pays" => "",
            "max" => "",
            "continent_id" => 1
        ]);
        DB::table("equipes")->insert([
            "nom"=>"United",
            "ville"=> "New-York",
            "pays"=>"USA",
            "max"=>12,
            "continent_id"=>2,
        ]);
        DB::table("equipes")->insert([
            "nom"=>"Lions",
            "ville"=> "Paris",
            "pays"=>"france",
            "max"=>11,
            "continent_id"=>4,
        ]);
        
        DB::table("equipes")->insert([
            "nom"=>"Griffondor",
            "ville"=> "Pekin",
            "pays"=>"Chine",
            "max"=>14,
            "continent_id"=>4,
        ]);
        DB::table("equipes")->insert([
            "nom"=>"Serpentar",
            "ville"=> "Rio",
            "pays"=>"Brazil",
            "max"=>13,
            "continent_id"=>3,
        ]);
        DB::table("equipes")->insert([
            "nom"=>"Serdaigle",
            "ville"=> "Brasilia",
            "pays"=>"Brazil",
            "max"=>15,
            "continent_id"=>3,
        ]);
        DB::table("equipes")->insert([
            "nom"=>"Pouffsouffle",
            "ville"=> "Sao Paulo",
            "pays"=>"Brazil",
            "max"=>16,
            "continent_id"=>3,
        ]);
        
        
    }
}
