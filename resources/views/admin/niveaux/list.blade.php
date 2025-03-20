@extends('admin.base')
@section('title', 'Niveaux')
@section('isActive11')
active
@endsection
@section('isActive12')
active
@endsection
@section('content')
<div class="container">
    <h1>List of niveaux</h1>

    <a href="{{ route('admin.niveaux.create') }}" class="btn btn-primary mb-3">Create New Level</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Date creation</th>
                <th>Active</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($niveaux as $niveau)
                <tr>
                    <td>{{ $niveau->id }}</td>
                    <td>{{ $niveau->nom }}</td>
                    <td>{{ $niveau->created_at }}</td>
                    <td>{{ $niveau->active ? 'Yes' : 'No' }}</td>
                    <td>
                        <a href="{{ route('admin.niveaux.show', $niveau->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('admin.niveaux.edit', $niveau->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.niveaux.destroy', $niveau->id) }}" method="POST" style="display:inline;">
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
