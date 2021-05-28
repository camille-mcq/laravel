<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JoueurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("joueurs")->insert([
            "nom"=>"II",
            "prenom"=> "Elizabeth",
            "age"=>34,
            "telephone"=>"0456769504",
            "mail"=>"elizabeth@mail.com",
            "pays"=>"angleterre",
            "genre_id"=>1,
            "role_id"=>2,
            "equipe_id"=>1
        ]);
        DB::table("joueurs")->insert([
            "nom"=>"Merkel",
            "prenom"=> "Angela",
            "age"=>34,
            "telephone"=>"0689553423",
            "mail"=>"merkel@mail.com",
            "pays"=>"allemagne",
            "genre_id"=>2,
            "role_id"=>4,
            "equipe_id"=>2,            
        ]);
        DB::table("joueurs")->insert([
            "nom"=>"Roi",
            "prenom"=> "Philippe",
            "age"=>34,
            "telephone"=>"0475235465",
            "mail"=>"roi@belgique.be",
            "pays"=>"belgique",
            "genre_id"=>2,
            "role_id"=>1,
            "equipe_id"=>3,
            
        ]);
        DB::table("joueurs")->insert([
            "nom"=>"Fz",
            "prenom"=> "Elias",
            "age"=>23,
            "telephone"=>"045634512",
            "mail"=>"fz@mail.com",
            "pays"=>"espagne",
            "genre_id"=>2,
            "role_id"=>1,
            "equipe_id"=>1
        ]);
        DB::table("joueurs")->insert([
            "nom"=>"Macron",
            "prenom"=> "Emmanuel",
            "age"=>27,
            "telephone"=>"0456456597",
            "mail"=>"emmanuel@mail.com",
            "pays"=>"france",
            "genre_id"=>2,
            "role_id"=>3,
            "equipe_id"=>3,
        ]);
        DB::table("joueurs")->insert([
            "nom"=>"Matarella",
            "prenom"=> "Sergio",
            "age"=>27,
            "telephone"=>"0456234597",
            "mail"=>"matarella@mail.com",
            "pays"=>"italie",
            "genre_id"=>2,
            "role_id"=>3,
            "equipe_id"=>3,
        ]);
        DB::table("joueurs")->insert([
            "nom"=>"Rebelo de Sousa",
            "prenom"=> "Marcelo",
            "age"=>27,
            "telephone"=>"0456234597",
            "mail"=>"rebelo@mail.com",
            "pays"=>"portugal",
            "genre_id"=>2,
            "role_id"=>3,
            "equipe_id"=>3,
        ]);
        DB::table("joueurs")->insert([
            "nom"=>"Jong-un",
            "prenom"=> "Kim",
            "age"=>27,
            "telephone"=>"0456234597",
            "mail"=>"kim@mail.com",
            "pays"=>"corée",
            "genre_id"=>2,
            "role_id"=>3,
            "equipe_id"=>3,
        ]);
        DB::table("joueurs")->insert([
            "nom"=>"Lala",
            "prenom"=> "Laurie",
            "age"=>23,
            "telephone"=>"0456234459",
            "mail"=>"lalalaurie@yoyo.mlgk",
            "pays"=>"belgique",
            "genre_id"=>1,
            "role_id"=>1,
            "equipe_id"=>3,
        ]);
        DB::table("joueurs")->insert([
            "nom"=>"CamCam",
            "prenom"=> "Camille",
            "age"=>24,
            "telephone"=>"0456234450",
            "mail"=>"camcamcamille@yoyo.mlgk",
            "pays"=>"belgique",
            "genre_id"=>1,
            "role_id"=>1,
            "equipe_id"=>3,
        ]);
    }
}
