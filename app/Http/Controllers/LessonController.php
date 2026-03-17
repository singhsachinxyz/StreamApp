<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function show(Lesson $lesson)
    {
        $lesson->load('section.course.sections.lessons');

        $user = auth()->user();

        // Check if user purchased course
        $hasAccess = $user->purchases()
            ->where('course_id', $lesson->section->course->id)
            ->exists();

        if (!$hasAccess && !$lesson->is_preview) {
            abort(403);
        }

        return view('lessons.show', compact('lesson'));
    }
}
