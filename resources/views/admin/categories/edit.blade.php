@extends('admin.base')
@section('title', 'Edit Category')
@section('isActive11')
active
@endsection
@section('isActive13')
active
@endsection
@section('content')
<div class="container">
    <h1>Edit Category</h1>

    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="code">Code</label>
            <input type="text" name="code" id="code" class="form-control" value="{{ $category->code }}" required>
        </div>
        <div class="form-group">
            <label for="nom">Name</label>
            <input type="text" name="nom" id="nom" class="form-control" value="{{ $category->nom }}" required>
        </div>
        <div class="form-group">
            <label for="is_article">Is Article?</label>
            <select name="is_article" class="form-select js-choice z-index-9 border-0 bg-light">
                <option value="1" {{ $category->is_article ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ !$category->is_article ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="is_cours">Is Course?</label>
            <select name="is_cours" class="form-select js-choice z-index-9 border-0 bg-light">
                <option value="1" {{ $category->is_cours ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ !$category->is_cours ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="active">Active</label>
            <select name="active" class="form-select js-choice z-index-9 border-0 bg-light">
                <option value="1" {{ $category->active ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ !$category->active ? 'selected' : '' }}>No</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
