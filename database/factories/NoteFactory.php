<?php

namespace Database\Factories;

use app\Models\Note;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

require_once 'vendor/autoload.php';

class NoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Note::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->uuid(),
            'name' => $this->faker->string,
            'description' => $this->faker->text,
            'active' => $this->faker->boolean(),
            'created_at' => $this->faker->date(),
        ];
    }
}
