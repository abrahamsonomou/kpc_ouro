@extends('admin.base')
@section('title', 'langues')
@section('isActive11')
active
@endsection
@section('isActive12')
active
@endsection
@section('content')
<div class="container">
    <h1>List of langues</h1>

    <a href="{{ route('admin.langues.create') }}" class="btn btn-primary mb-3">Create New langue</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Code</th>
                <th>Name</th>
                <th>Course</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($langues as $langue)
                <tr>
                    <td>{{ $langue->id }}</td>
                    <td>{{ $langue->code }}</td>
                    <td>{{ $langue->nom }}</td>
                    <td>{{ $langue->is_cours ? 'Yes' : 'No' }}</td>
                    <td>{{ $langue->active ? 'Active' : 'Inactive' }}</td>
                    <td>
                        <a href="{{ route('admin.langues.edit', $langue->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.langues.destroy', $langue->id) }}" method="POST" style="display:inline;">
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
