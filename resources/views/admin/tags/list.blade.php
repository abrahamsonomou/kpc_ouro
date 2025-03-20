@extends('admin.base')
@section('title', 'Tags')
@section('isActive11')
active
@endsection
@section('isActive12')
active
@endsection
@section('content')
<div class="container">
    <h1>List of tags</h1>

    <a href="{{ route('admin.tags.create') }}" class="btn btn-primary mb-3">Create New Tag</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Name</th>
                <th>Article</th>
                <th>Course</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tags as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->code }}</td>
                    <td>{{ $category->nom }}</td>
                    <td>{{ $category->is_article ? 'Yes' : 'No' }}</td>
                    <td>{{ $category->is_cours ? 'Yes' : 'No' }}</td>
                    <td>{{ $category->active ? 'Active' : 'Inactive' }}</td>
                    <td>
                        <a href="{{ route('admin.tags.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.tags.destroy', $category->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
