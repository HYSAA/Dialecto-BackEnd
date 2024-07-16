@extends('layouts.app')

@section('content')
    <h1>Lessons</h1>

    <a href="{{ route('lessons.create') }}" class="btn btn-primary mb-2">Create New Lesson</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Course ID</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lessons as $lesson)
                <tr>
                    <td>{{ $lesson->id }}</td>
                    <td>{{ $lesson->title }}</td>
                    <td>{{ $lesson->course_id }}</td>
                    <td>
                        <a href="{{ route('lessons.show', $lesson->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('lessons.edit', $lesson->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('lessons.destroy', $lesson->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this lesson?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
