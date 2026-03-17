<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'slug' => Str::slug($this->faker->unique()->sentence(3)),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomElement([0, 499, 999, 1999]),
            'thumbnail' => null,
            'user_id' => 1,
            'is_published' => true,
        ];
    }
}
