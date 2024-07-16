@extends('layouts.app')

@section('content')
    <h1>Create New Lesson</h1>

    <form action="{{ route('lessons.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="course_id">Course ID</label>
            <input type="text" class="form-control" id="course_id" name="course_id">
        </div>
        <button type="submit" class="btn btn-primary">Create Lesson</button>
    </form>
@endsection
