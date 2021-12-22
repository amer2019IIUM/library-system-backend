<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Book;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'book_name' => $this->faker->word,
            'book_desc' => $this->faker->text,
            'author' => $this->faker->word,
            'image' => $this->faker->text,
            'is_booked' => $this->faker->boolean,
            'user_id' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
