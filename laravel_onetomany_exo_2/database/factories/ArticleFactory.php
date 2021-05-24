<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nom' => $this->faker->realText(12),
            'image' => $this->faker->realText(200),
            'categorie' => $this->faker->realText(200),
            'description'=> $this->faker->realText(200),
            'auteur' => $this->faker->realText(30),
            'date'=> $this->faker->dateTime('now'),
        ];
    }
}
