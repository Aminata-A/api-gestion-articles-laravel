<!-- resources/views/articles/index.blade.php -->
@extends('layouts.app')

@section('title', 'Articles')

@section('content')
<div class="row">
    @foreach ($articles as $article)
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">{{ $article->title }}</h5>
                <p class="card-text">{{ Str::limit($article->body, 150) }}</p>
                <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
