@extends('admin.base')
@section('title', 'Edit Tag')
@section('isActive11')
active
@endsection
@section('isActive14')
active
@endsection
@section('content')
<div class="container">
    <h1>Edit Tag</h1>

    <form action="{{ route('admin.tags.update', $tag->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="code">Code</label>
            <input type="text" name="code" id="code" class="form-control" value="{{ $tag->code }}" required>
        </div>
        <div class="form-group">
            <label for="nom">Name</label>
            <input type="text" name="nom" id="nom" class="form-control" value="{{ $tag->nom }}" required>
        </div>
        <div class="form-group">
            <label for="is_article">Is Article?</label>
            <select name="is_article" class="form-select js-choice z-index-9 border-0 bg-light">
                <option value="1" {{ $tag->is_article ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ !$tag->is_article ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="is_cours">Is Course?</label>
            <select name="is_cours" class="form-select js-choice z-index-9 border-0 bg-light">
                <option value="1" {{ $tag->is_cours ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ !$tag->is_cours ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="active">Active</label>
            <select name="active" class="form-select js-choice z-index-9 border-0 bg-light">
                <option value="1" {{ $tag->active ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ !$tag->active ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
