@extends('admin.base')
@section('title', 'bureaux')
@section('isActive11')
active
@endsection
@section('isActive12')
active
@endsection
@section('content')
<div class="container">
    <h1>List of bureaux</h1>

    <a href="{{ route('admin.bureaux.create') }}" class="btn btn-primary mb-3">Create New bureau</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Ville</th>
                <th>Email</th>
                <th>Adresse</th>
                <th>Telephone</th>
                <th>Active</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bureaux as $bureau)
                <tr>
                    <td>{{ $bureau->id }}</td>
                    <td>{{ $bureau->ville }}</td>
                    <td>{{ $bureau->email }}</td>
                    <td>{{ $bureau->adresse }}</td>
                    <td>{{ $bureau->telephone }}</td>
                    <td>{{ $bureau->active ? 'Active' : 'Inactive' }}</td>
                    <td>
                        <a href="{{ route('admin.bureaux.edit', $bureau->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.bureaux.destroy', $bureau->id) }}" method="POST" style="display:inline;">
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
