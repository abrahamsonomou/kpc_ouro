@extends('admin.base')
@section('title', 'Instructors')
@section('isActive5')
active
@endsection
@section('isActive4')
active
@endsection
@section('content')

<div class="page-content-wrapper border">

    <!-- Title -->
    <div class="row">
        <div class="col-12">
            <h1 class="h3 mb-2 mb-sm-0">Instructors</h1>
        </div>
    </div>

    <!-- Card START -->
    <div class="card bg-transparent">

        <!-- Card header START -->
        <div class="card-header bg-transparent border-bottom px-0">
            <!-- Search and select START -->
            <div class="row g-3 align-items-center justify-content-between">

                <!-- Search bar -->
                <div class="col-md-8">
                    <form class="rounded position-relative">
                        <input class="form-control bg-transparent" type="search" placeholder="Search" aria-label="Search">
                        <button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
                            <i class="fas fa-search fs-6 "></i>
                        </button>
                    </form>
                </div>

                <!-- Tab buttons -->
                <div class="col-md-3">
                    <!-- Tabs START -->
                    <ul class="list-inline mb-0 nav nav-pills nav-pill-dark-soft border-0 justify-content-end" id="pills-tab" role="tablist">
                        <!-- Grid tab -->
                        <li class="nav-item">
                            <a href="#nav-preview-tab-1" class="nav-link mb-0 me-2 active" data-bs-toggle="tab">
                                <i class="fas fa-fw fa-th-large"></i>
                            </a>
                        </li>
                        <!-- List tab -->
                        <li class="nav-item">
                            <a href="#nav-html-tab-1" class="nav-link mb-0" data-bs-toggle="tab">
                                <i class="fas fa-fw fa-list-ul"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- Tabs end -->
                </div>
            </div>
            <!-- Search and select END -->
        </div>
        <!-- Card header END -->

        <!-- Card body START -->
        <div class="card-body px-0">
            <!-- Tabs content START -->
            <div class="tab-content">

                <!-- Tabs content item START -->
                <div class="tab-pane fade show active" id="nav-preview-tab-1">
                    <div class="row g-4">

                        <!-- Card item START -->
                        <div class="col-md-6 col-xxl-4">
                            <div class="card bg-transparent border h-100"> 
                                <!-- Card header -->
                                <div class="card-header bg-transparent border-bottom d-flex align-items-sm-center justify-content-between">
                                    <div class="d-sm-flex align-items-center">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-md flex-shrink-0">
                                            <img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/09.jpg') }}" alt="avatar">
                                        </div>
                                        <!-- Info -->
                                        <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                                            <h5 class="mb-0"><a href="#">Lori Stevens</a></h5>
                                            <p class="mb-0 small">Web Designer</p>
                                        </div>
                                    </div>

                                    <!-- Edit dropdown -->
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button" id="dropdownShare1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots fa-fw"></i>
                                        </a>
                                        <!-- dropdown button -->
                                        <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare1">
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <!-- Total students -->
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="d-flex align-items-center">
                                            <div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle flex-shrink-0"><i class="fas fa-user-graduate fa-fw"></i></div>
                                            <h6 class="mb-0 ms-2 fw-light">Total Students</h6>
                                        </div>
                                        <span class="mb-0 fw-bold">5,354</span>
                                    </div>

                                    <!-- Total courses -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                            <div class="icon-md bg-purple bg-opacity-10 text-purple rounded-circle flex-shrink-0"><i class="fas fa-book fa-fw"></i></div>
                                            <h6 class="mb-0 ms-2 fw-light">Total Courses</h6>
                                        </div>
                                        <span class="mb-0 fw-bold">15</span>
                                    </div>
                                </div>

                                <!-- Card footer -->
                                <div class="card-footer bg-transparent border-top">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <!-- Rating star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                                        </ul>
                                        <!-- Message button -->
                                        <a href="#" class="btn btn-link text-body p-0 mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Message" aria-label="Message">
                                            <i class="bi bi-envelope-fill"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->

                    </div> <!-- Row END -->
                </div>
                <!-- Tabs content item END -->

                <!-- Tabs content item START -->
                <div class="tab-pane fade" id="nav-html-tab-1">
                    <!-- Table START -->
                    <div class="table-responsive border-0">
                        <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                            <!-- Table head -->
                            <thead>
                                <tr>
                                    <th scope="col" class="border-0 rounded-start">Instructor name</th>
                                    <th scope="col" class="border-0">Detail</th>
                                    <th scope="col" class="border-0">Courses</th>
                                    <th scope="col" class="border-0">Total studentss</th>
                                    <th scope="col" class="border-0 rounded-end">Action</th>
                                </tr>
                            </thead>

                            <!-- Table body START -->
                            <tbody>
                                <!-- Table row -->
                                <tr>
                                    <!-- Table data -->
                                    <td>
                                        <div class="d-flex align-items-center position-relative">
                                            <!-- Image -->
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset('assets/images/avatar/09.jpg') }}" class="rounded-circle" alt="">
                                            </div>
                                            <div class="mb-0 ms-2">
                                                <!-- Title -->
                                                <h6 class="mb-0"><a href="{{ route('admin.instructors_details', ['id'=>1]) }}" class="stretched-link">Lori Stevens</a></h6>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Table data -->
                                    <td class="text-center text-sm-start">
                                        <h6 class="mb-0">Web Designer</h6>
                                    </td>

                                    <!-- Table data -->
                                    <td>15</td>

                                    <!-- Table data -->
                                    <td>5,354</td>

                                    <!-- Table data -->
                                    <td>
                                        <a href="#" class="btn btn-info-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message">
                                            <i class="bi bi-envelope"></i>
                                        </a>
                                        <a href="#" class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <button class="btn btn-danger-soft btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                            </tbody>
                            <!-- Table body END -->
                        </table>
                    </div>
                    <!-- Table END -->
                </div>
                <!-- Tabs content item END -->

            </div>
            <!-- Tabs content END -->
        </div>
        <!-- Card body END -->

        <!-- Card footer START -->
        <div class="card-footer bg-transparent p-0">
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
