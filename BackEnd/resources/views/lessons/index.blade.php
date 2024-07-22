<!-- resources/views/lessons/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Lessons for {{ $course->name }}</h1>
    <a href="{{ route('courses.lessons.create', $course) }}">Add New Lesson</a>
    <ul>
        @foreach ($lessons as $lesson)
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
