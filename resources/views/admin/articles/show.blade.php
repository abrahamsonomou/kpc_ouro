@extends('admin.base')
@section('title', 'categories')
@section('isActive11')
active
@endsection
@section('isActive12')
active
@endsection
@section('content')
<div class="container">
    <h1>Article Details</h1>

    <div class="card">
        <div class="card-header">
            <h3>{{ $article->titre }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Description:</strong></p>
            <p>{{ $article->description }}</p>

            <p><strong>Category:</strong> {{ $article->categorie->nom }}</p>

            <p><strong>Active:</strong> {{ $article->active ? 'Yes' : 'No' }}</p>
            <p><strong>Tags:</strong> {{ $article->active ? 'Yes' : 'No' }}</p>

            @if($article->image)
                <p><strong>Image:</strong></p>
                <img src="{{ asset('storage/' . $article->image) }}" alt="Article Image" width="200">
            @endif
        </div>
        <div class="card-footer">
            <a href="{{ route('admin.articles.list') }}" class="btn btn-secondary">Back to Articles</a>
            <a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-primary">Edit</a>
        </div>
    </div>
</div>
@endsection
