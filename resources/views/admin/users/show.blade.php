@extends('admin.base')
@section('title', 'Utilisateurs')
@section('isActive11')
active
@endsection
@section('isActive12')
active
@endsection
@section('content')
<div class="container">
    <h1>{{ $user->name }}</h1>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Role:</strong> {{ $user->role }}</p>
    <p><strong>Status:</strong> {{ $user->is_active ? 'Active' : 'Inactive' }}</p>
    <!-- Show other user details here -->
    <a href="{{ route('admin.users.list') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
