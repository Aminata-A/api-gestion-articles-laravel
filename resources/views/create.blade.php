<!-- resources/views/articles/create.blade.php -->
@extends('layouts.app')

@section('title', 'Create Article')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('articles.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
