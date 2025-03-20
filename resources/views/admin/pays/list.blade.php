@extends('admin.base')
@section('title', 'Pays')
@section('isActive11')
active
@endsection
@section('isActive12')
active
@endsection
@section('content')
<div class="container">
    <h1>List of Pays</h1>

    <a href="{{ route('admin.pays.create') }}" class="btn btn-primary mb-3">Create New Pays</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Code ISO</th>
                <th>Indicatif</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pays as $paysItem)
                <tr>
                    <td>{{ $paysItem->id }}</td>
                    <td>{{ $paysItem->nom }}</td>
                    <td>{{ $paysItem->code_iso }}</td>
                    <td>{{ $paysItem->indicatif }}</td>
                    <td>
                        <a href="{{ route('admin.pays.show', $paysItem->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('admin.pays.edit', $paysItem->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.pays.destroy', $paysItem->id) }}" method="POST" style="display:inline;">
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
