<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Section;
use App\Models\Lesson;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::factory(5)->create()->each(function ($course) {

            Section::factory(3)->create([
                'course_id' => $course->id
            ])->each(function ($section) {

                Lesson::factory(5)->create([
                    'section_id' => $section->id
                ]);

            });

        });
    }
}
