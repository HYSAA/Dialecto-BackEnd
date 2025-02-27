<!-- resources/views/courses/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>{{ $course->name }}</h1>
    <a href="{{ route('courses.edit', $course) }}">Edit</a>
    <form action="{{ route('courses.destroy', $course) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <h2>Lessons</h2>
    <a href="{{ route('courses.lessons.create', $course) }}">Add New Lesson</a>
    <ul>
        @foreach ($course->lessons as $lesson)
            <li>
                <a href="{{ route('lessons.show', $lesson) }}">{{ $lesson->name }}</a>
                <a href="{{ route('lessons.edit', $lesson) }}">Edit</a>
                <form action="{{ route('lessons.destroy', $lesson) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
