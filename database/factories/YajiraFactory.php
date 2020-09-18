<?php

namespace Database\Factories;

use App\Models\Yajira;
use Illuminate\Database\Eloquent\Factories\Factory;


class YajiraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Yajira::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'address' => $this->faker->word, // password
           // 'remember_token' => Str::random(10),
        ];
    }
}
