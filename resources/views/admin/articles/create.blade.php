@extends('admin.base')
@section('title', 'Articles')
@section('isActive11')
active
@endsection
@section('isActive12')
active
@endsection
@section('content')
<div class="container">
    <h1>Create New Article</h1>

    <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="titre">Title</label>
            <input type="text" name="titre" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>

        <div class="col-lg-6">
            <label class="form-label">Select Categorie *</label>
            <select name="categorie_id" id="categorie_id"
                class="form-select js-choice z-index-9 border-0 bg-light" aria-label=".form-select-sm" required>
                <option value="">Select Categorie</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->nom }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-lg-6">
            <label class="form-label">Select auteur *</label>
            <select name="user_id" id="user_id"  class="form-select js-choice z-index-9 border-0 bg-light" aria-label=".form-select-sm" required>
                <option value="">Select Auteur</option>
                @foreach ($auteurs as $auteur)
                    <option value="{{ $auteur->id }}">{{ $auteur->name }} ({{ $auteur->email }})
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Other article fields... -->

        <div class="form-group">
            <label for="tags">Tags</label>
            <div>
                @foreach($tags as $tag)
                    <label>
                        <input type="checkbox" name="tags[]" value="{{ $tag->id }}"> {{ $tag->nom }}
                    </label><br>
                @endforeach
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Create Article</button>
    </form>
</div>
@endsection
