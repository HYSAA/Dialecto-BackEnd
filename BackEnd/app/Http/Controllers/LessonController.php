<?php


namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index()
    {
        $lessons = Lesson::all();
        return view('lessons.index', compact('lessons'));
    }

    public function create()
    {
        return view('lessons.create');
    }

    public function store(Request $request)
    {
        // Validation logic if needed
        Lesson::create($request->all());

        return redirect()->route('lessons.index')
            ->with('success', 'Lesson created successfully.');
    }

    public function show($id)
    {
        $lesson = Lesson::findOrFail($id);
        return view('lessons.show', compact('lesson'));
    }

    public function edit($id)
    {
        $lesson = Lesson::findOrFail($id);
        return view('lessons.edit', compact('lesson'));
    }

    public function update(Request $request, $id)
    {
        // Validation logic if needed
        Lesson::findOrFail($id)->update($request->all());

        return redirect()->route('lessons.index')
            ->with('success', 'Lesson updated successfully.');
    }

    public function destroy($id)
    {
        Lesson::findOrFail($id)->delete();
        return redirect()->route('lessons.index')
            ->with('success', 'Lesson deleted successfully.');
    }
}

