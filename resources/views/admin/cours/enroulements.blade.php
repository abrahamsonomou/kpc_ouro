@extends('admin.base')
@section('title', 'Enroulements')
@section('isActive2')
active
@endsection
@section('isActive6')
active
@endsection
@section('content')

<div class="page-content-wrapper border">
    <div class="row mb-3">
        <div class="col-12">
            <h1 class="h3 mb-0">Enroulements</h1>
        </div>
    </div>
    <div class="card card-body bg-transparent pb-0 border mb-4">
        <div class="table-responsive border-0">
            <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="border-0 rounded-start">#</th>
                        <th scope="col" class="border-0">Apprenant</th>
                        <th scope="col" class="border-0">Cours</th>
                        <th scope="col" class="border-0">Etat</th>
                        <th scope="col" class="border-0">Date</th>
                        <th scope="col" class="border-0 rounded-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>
                            <div class="d-flex align-items-center position-relative">
                                <div class="mb-0 ms-2">
                                    <h6 class="mb-0"><a href="#" class="stretched-link">Lori Stevens</a></h6>
                                </div>
                            </div>
                        </td>
                        <td>
                            <h6 class="table-responsive-title mb-0"><a href="#">test@gmail.com</a></h6>
                        </td>
                        <td>
                            <h6 class="table-responsive-title mb-0"><a href="#">Building Scalable APIs with GraphQL</a></h6>
                        </td>
                        <td>
                            <h6>21/05/2025</h6>
                        </td>
                        <td>
                            <button class="btn btn-danger-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete">
                                <i class="bi bi-trash"></i>
                            </button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <div class="card-footer bg-transparent px-0">
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
