<?php

namespace Database\Factories;

use App\Models\Lesson;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Lesson>
 */
class LessonFactory extends Factory
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
            'video_path' => 'videos/sample.mp4',
            'duration' => $this->faker->numberBetween(60, 900),
            'is_preview' => $this->faker->boolean(30),
            'position' => $this->faker->numberBetween(1, 20),
        ];
    }
}
