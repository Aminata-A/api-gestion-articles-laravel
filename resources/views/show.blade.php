<!-- resources/views/articles/show.blade.php -->
@extends('layouts.app')

@section('title', $article->title)

@section('content')
<div class="card">
    <div class="card-body">
        <h1 class="card-title">{{ $article->title }}</h1>
        <p class="card-text">{{ $article->body }}</p>
        <a href="{{ route('articles.index') }}" class="btn btn-secondary">Back to Articles</a>
    </div>
</div>
@endsection
