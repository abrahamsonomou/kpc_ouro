@extends('admin.base')
@section('title', 'Devises')
@section('isActive16')
active
@endsection
@section('isActive19')
active
@endsection
@section('content')
<div class="page-content-wrapper border">
    <!-- Card START -->
    <div class="card bg-transparent border">

        <!-- Card header START -->
        <div class="card-header bg-light border-bottom">
            <!-- Search and select START -->
            <div class="row g-3 align-items-center justify-content-between">

                <!-- Search bar -->
                <div class="col-md-8">
                    <form class="rounded position-relative">
                        <input class="form-control bg-body" type="search" placeholder="Search" aria-label="Search">
                        <button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
                            <i class="fas fa-search fs-6 "></i>
                        </button>
                    </form>
                </div>
                
                <!-- Select option -->
                <div class="col-md-2">
                    <!-- Short by filter -->
                    <form>
                        <select class="form-select js-choice border-0 z-index-9" aria-label=".form-select-sm">
                            <option value="">Sort by</option>
                            <option>Newest</option>
                            <option>Oldest</option>
                            <option>Accepted</option>
                            <option>Rejected</option>
                        </select>
                    </form>
                </div>

                <div class="col-md-2">
                    <a href="{{ route('admin.devises.create') }}" class="btn btn-outline-primary rounded-3 d-flex align-items-center gap-1">
                        <i class="mdi mdi-plus-circle fs-4"></i>
						 Ajouter
                    </a>
                </div>
            </div>
            <!-- Search and select END -->
        </div>
        <!-- Card header END -->

        <!-- Card body START -->
        <div class="card-body">
            <!-- Course table START -->
            <div class="table-responsive border-0 rounded-3">
                <!-- Table START -->
                <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                    <!-- Table head -->
                    <thead>
                        <tr>
                            <th scope="col" class="border-0">Code ISO</th>
                            <th scope="col" class="border-0">Symbole</th>
                            <th scope="col" class="border-0">Nom</th>
                            <th scope="col" class="border-0">Nom Court</th>
                            <th scope="col" class="border-0">Active</th>
                            <th scope="col" class="border-0">Actions</th>
                        </tr>
                    </thead>

                    <!-- Table body START -->
                    <tbody>
						@foreach($devises as $devise)
						<tr>
							<td data-label="Libellé">{{ $devise->code_iso }}</td>
							<td data-label="Code">{{ $devise->symbole }}</td>
							<td data-label="Description">{{ $devise->nom }}</td>
							<td data-label="Description">{{ $devise->nom_court }}</td>
                            
							<td data-label="Statut">

                                @if ($devise->active == 0)
                                    
                                    <span class="badge bg-warning bg-opacity-15 text-warning">Inactif</span> 
                                    @elseif($devise->active == 1)
                                        
                                    <span class="badge bg-warning bg-opacity-15 text-success">Actif</span> 
                                    @endif
							</td>
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
                    <!-- Table body END -->
                </table>
                <!-- Table END -->
            </div>
            <!-- Course table END -->
        </div>
        <!-- Card body END -->

        <!-- Card footer START -->
        <div class="card-footer bg-transparent pt-0">
            <!-- Pagination START -->
            <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                <!-- Content -->
                <p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                <!-- Pagination -->
                <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                    <ul class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                        <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
                        <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                        <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
                        <li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                    </ul>
                </nav>
            </div>
            <!-- Pagination END -->
        </div>
        <!-- Card footer END -->
    </div>
    <!-- Card END -->
</div>

@endsection
