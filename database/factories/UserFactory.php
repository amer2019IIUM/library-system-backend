<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->userName,
            'email' => $this->faker->safeEmail,
            'email_verified_at' => $this->faker->word,
            'password' => $this->faker->password,
            'address' => $this->faker->word,
            'lat' => $this->faker->latitude,
            'lng' => $this->faker->longitude,
            'isblocked' => $this->faker->boolean,
        ];
    }
}
