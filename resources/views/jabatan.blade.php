@extends('layout.main')
@section('content')
<main class="content">
    <div class="container-fluid py-2" style="font-size: 1px;">
        <div class="row">
            <div class="col-md-20 mt-4">
                <div class="card">
                    <div class="card-header pb-0 px-3">
                        <h6 class="mb-0">Master Positions Level</h6>
                        <a class="btn btn-link text-success text-gradient px-3 mb-0" href="javascript:;"><i class="fas fa-user-plus me-2"></i>Add New Employee</a>
                    </div>
                    <div class="card-body pt-4 p-3">
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                <div class="d-flex flex-column">
                                <h6 class="mb-3 text-sm">President</h6>
                                    <span class="mb-2 text-xs">Name: <span class="text-dark font-weight-bold ms-sm-2">Bambang Kurniawan, M.Kom</span></span>
                                    <span class="mb-2 text-xs">Age: <span class="text-dark ms-sm-2 font-weight-bold">57 years old</span></span>
                                    <span class="mb-2 text-xs">Educational Institutions: <span class="text-dark ms-sm-2 font-weight-bold">University of Indonesia</span></span>
                                    <span class="text-xs">Salary: <span class="text-dark ms-sm-2 font-weight-bold">$ 27000,00</span></span>
                                </div>
                                <div class="ms-auto text-end">
                                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                    <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                <div class="d-flex flex-column">
                                <h6 class="mb-3 text-sm">Chief Executive Officer</h6>
                                    <span class="mb-2 text-xs">Name: <span class="text-dark font-weight-bold ms-sm-2">Angga Yunirto Putra, M.Kom</span></span>
                                    <span class="mb-2 text-xs">Age: <span class="text-dark ms-sm-2 font-weight-bold">32 years old</span></span>
                                    <span class="mb-2 text-xs">Educational Institutions: <span class="text-dark ms-sm-2 font-weight-bold">University of Indonesia</span></span>
                                    <span class="text-xs">Salary: <span class="text-dark ms-sm-2 font-weight-bold">$ 17000,00</span></span>
                                </div>
                                <div class="ms-auto text-end">
                                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                    <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                </div>
                            </li>
                            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                                <div class="d-flex flex-column">
                                <h6 class="mb-3 text-sm">Vice President</h6>
                                    <span class="mb-2 text-xs">Name: <span class="text-dark font-weight-bold ms-sm-2">Ratna Ajeng Sari, M.Pd</span></span>
                                    <span class="mb-2 text-xs">Age: <span class="text-dark ms-sm-2 font-weight-bold">45 years old</span></span>
                                    <span class="mb-2 text-xs">Educational Institutions: <span class="text-dark ms-sm-2 font-weight-bold">University of Gajahmada</span></span>
                                    <span class="text-xs">Salary: <span class="text-dark ms-sm-2 font-weight-bold">$ 13000,00</span></span>
                                </div>
                                <div class="ms-auto text-end">
                                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                    <a class="btn btn-link text-dark px-3 mb-0" href="javascript:;"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection