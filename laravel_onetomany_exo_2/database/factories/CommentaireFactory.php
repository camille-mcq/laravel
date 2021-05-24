<?php

namespace Database\Factories;

use App\Models\commentaire;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentaireFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = commentaire::class;

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
            'mail' => $this->faker->realText(200),
            'message' => $this->faker->realText(200),
            'date'=> $this->faker->dateTime('now'),
        ];
    }
}
