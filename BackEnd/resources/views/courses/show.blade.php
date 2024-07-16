<!-- resources/views/courses/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $course->title }}</h1>
        <p><strong>Description:</strong> {{ $course->description }}</p>
        <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back to Courses</a>
    </div>
@endsection
