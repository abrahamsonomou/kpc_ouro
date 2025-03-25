@extends('admin.base')
@section('title', 'partenaires')
@section('isActive11')
active
@endsection
@section('isActive12')
active
@endsection
@section('content')
<div class="container">
    <h1>Create New partenaire</h1>

    <form action="{{ route('admin.partenaires.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Logo</label>
            <input type="file" name="logo" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Ordre</label>
            <input type="number" name="ordre" class="form-control" value="0">
        </div>

        <div class="mb-3">
            <label class="form-label">Active</label>
            <select name="active" class="form-control">
                <option value="1">Oui</option>
                <option value="0">Non</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Créer</button>
    </form>
</div>
@endsection
