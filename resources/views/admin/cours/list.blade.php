@extends('admin.base')
@section('title', 'Course')
@section('isActive2')
active
@endsection
@section('content')

<div class="page-content-wrapper border">

    <div class="row mb-3">
        <div class="col-12 d-sm-flex justify-content-between align-items-center">
            <h1 class="h3 mb-2 mb-sm-0">Courses</h1>
            <a href="{{ route('admin.cours.create') }}" class="btn btn-sm btn-primary mb-0">Create a Course</a>
        </div>
    </div>

    <div class="row g-4 mb-4">
        <div class="col-sm-6 col-lg-4">
            <div class="text-center p-4 bg-primary bg-opacity-10 border border-primary rounded-3">
                <h6>Total Courses</h6>
                <h2 class="mb-0 fs-1 text-primary">1200</h2>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="text-center p-4 bg-success bg-opacity-10 border border-success rounded-3">
                <h6>Activated Courses</h6>
                <h2 class="mb-0 fs-1 text-success">996</h2>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="text-center p-4  bg-warning bg-opacity-15 border border-warning rounded-3">
                <h6>Pending Courses</h6>
                <h2 class="mb-0 fs-1 text-warning">200</h2>
            </div>
        </div>
    </div>

    <div class="card bg-transparent border">

        <div class="card-header bg-light border-bottom">
            <div class="row g-3 align-items-center justify-content-between">
                <div class="col-md-8">
                    <form class="rounded position-relative">
                        <input class="form-control bg-body" type="search" placeholder="Search" aria-label="Search">
                        <button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
                            <i class="fas fa-search fs-6 "></i>
                        </button>
                    </form>
                </div>

                <div class="col-md-3">
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
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive border-0 rounded-3">
                <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                    <thead>
                        <tr>
                            <th scope="col" class="border-0 rounded-start">Course Name</th>
                            <th scope="col" class="border-0">Instructor</th>
                            <th scope="col" class="border-0">Added Date</th>
                            <th scope="col" class="border-0">Type</th>
                            <th scope="col" class="border-0">Price</th>
                            <th scope="col" class="border-0">Status</th>
                            <th scope="col" class="border-0 rounded-end">Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach($cours as $course)

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <div class="w-60px">
                                            <img src="{{ asset('assets/images/courses/4by3/08.jpg') }}" class="rounded" alt="">
                                        </div>
                                        <h6 class="table-responsive-title mb-0 ms-2">	
                                            <a href="#" class="stretched-link">{{ $course->titre }}</a>
                                        </h6>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="avatar avatar-xs flex-shrink-0">

                                            @if ($course->instructor->avatar)
                                            <img class="avatar-img rounded-circle" src="{{ asset('storage/avatars/' . $course->instructor->avatar) }}" alt="avatar">
                                            @else
                                            <img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/09.jpg') }}" alt="avatar">
                                            @endif
                                        
                                        </div>
                                        <div class="ms-2">
                                            <h6 class="mb-0 fw-light">{{ $course->instructor->name }}</h6>
                                        </div>
                                    </div>
                                </td>

                                <td>28 Oct 2021</td>

                                <td> <span class="badge text-bg-primary">{{ $course->categorie->nom }}</span> </td>

                                <td>{{ $course->prix }} {{ $course->devise->nom_court }}</td>

                           

                                <td> 
                                    @if ($course->active == 0)
                                    
                                    <span class="badge bg-warning bg-opacity-15 text-warning">Inactif</span> 
                                    @elseif($course->active == 1)
                                        
                                    <span class="badge bg-warning bg-opacity-15 text-success">Actif</span> 
                                    @endif
                                
                                </td>

                                <td>
                                    <a href="#" class="btn btn-sm btn-success-soft me-1 mb-1 mb-md-0">Approve</a>
                                    <button class="btn btn-sm btn-secondary-soft mb-0">Reject</button>
                                    <a href="{{ route('admin.cours.edit', $course->id) }}" class="btn btn-sm btn-dark me-1 mb-1 mb-md-0">Edit</a>
                                    <form action="{{ route('admin.cours.destroy', $course->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce cours ?')" class="btn btn-sm btn-danger me-1 mb-1 mb-md-0">Delete</button>
                                    </form>

                                    <form action="{{ route('admin.cours.toggleStatus', $course->id) }}" method="POST">
                                        @csrf
                                        @method('POST') <!-- ou @method('PUT') selon vos préférences -->
                                        <button type="submit" class="btn btn-{{ $course->etat == 0 ? 'success' : 'danger' }}">
                                            {{ $course->etat == 0 ? 'Activate' : 'Deactivate' }}
                                        </button>
                                    </form>
                                    
                                </td>
                            </tr>

                        @endforeach




                    </tbody>
                </table>
            </div>
        </div>

        <div class="card-footer bg-transparent pt-0">
            <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                <p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
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
        </div>


    </div>
</div>

@endsection
