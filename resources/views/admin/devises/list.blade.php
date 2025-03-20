@extends('admin.base')
@section('title', 'Devises')
@section('isActive11')
active
@endsection
@section('isActive12')
active
@endsection
@section('content')
<div class="container">
    <h1>List of Devises</h1>

    <a href="{{ route('admin.devises.create') }}" class="btn btn-primary mb-3">Create New Devise</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Code ISO</th>
                <th>Symbole</th>
                <th>Nom</th>
                <th>Nom Court</th>
                <th>Active</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($devises as $devise)
                <tr>
                    <td>{{ $devise->id }}</td>
                    <td>{{ $devise->code_iso }}</td>
                    <td>{{ $devise->symbole }}</td>
                    <td>{{ $devise->nom }}</td>
                    <td>{{ $devise->nom_court }}</td>
                    <td>{{ $devise->active ? 'Yes' : 'No' }}</td>
                    <td>
                        <a href="{{ route('admin.devises.show', $devise->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('admin.devises.edit', $devise->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.devises.destroy', $devise->id) }}" method="POST" style="display:inline;">
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
