<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Course;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index(Course $course)
    {
        $lessons = $course->lessons;
        return response()->json($lessons);
    }

    public function store(Request $request, Course $course)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $lesson = $course->lessons()->create($validatedData);
        return response()->json($lesson, 201);
    }

    public function show(Course $course, Lesson $lesson)
    {
        return response()->json($lesson);
    }

    public function update(Request $request, Course $course, Lesson $lesson)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $lesson->update($validatedData);
        return response()->json($lesson);
    }

    public function destroy(Course $course, Lesson $lesson)
    {
        $lesson->delete();
        return response()->json(null, 204);
    }
}