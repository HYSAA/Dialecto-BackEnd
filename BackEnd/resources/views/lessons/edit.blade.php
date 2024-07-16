@extends('layouts.app')

@section('content')
    <h1>Edit Lesson</h1>

    <form action="{{ route('lessons.update', $lesson->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $lesson->title }}">
        </div>
        <div class="form-group">
            <label for="course_id">Course ID</label>
            <input type="text" class="form-control" id="course_id" name="course_id" value="{{ $lesson->course_id }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Lesson</button>
    </form>
@endsection
