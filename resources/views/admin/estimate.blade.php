@extends('mobilelayouts.master')
@section('content')


<!-- begin container-fluid -->
<div class="container-fluid">
                        <!-- begin row -->
<div class="row">
    <div class="col-md-12 m-b-30">
        <!-- begin page title -->
        <div class="d-block d-sm-flex flex-nowrap align-items-center">
            <div class="page-title mb-2 mb-sm-0">
                <h1>Estimate</h1>
            </div>
            <div class="ml-auto d-flex align-items-center">
                <nav>
                    <ol class="breadcrumb p-0 m-b-0">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="ti ti-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Home
                        </li>
                        <li class="breadcrumb-item active text-primary" aria-current="page">Manage Estimate</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- end page title -->
    </div>
</div>
<!-- end row -->
<!-- begin row -->
<div class="row">
    <div class="col-xxl-12 m-b-30">
        <div class="card card-statistics h-100 mb-0">
            <div class="card-header d-flex align-items-center justify-content-between">
                <div class="card-heading">
                    <h4 class="card-title"></h4>
                </div>
                <div class="dropdown">
                    <a class="btn btn-xs" href="#!">Export <i class="zmdi zmdi-download pl-1"></i> </a>
                </div>
            </div>
            <div class="card-body scrollbar scroll_dark pt-0" style="">
                <div class="datatable-wrapper table-responsive">
                    <table id="datatable" class="table table-borderless table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Base Fare</th>
                                <th>Rate Per KM</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forEach($estimate as $estimate)
                            <tr>
                                <td>{{$estimate->id}}</td>
                                <td>Estimate</td>
                                <td>{{$estimate->baseFare}}</td>
                                <td>{{$estimate->ratePerKm}}</td>
                                <td> <a class="mr-3" href="{{route('customer.edit', $estimate->id)}}"><i class="fe fe-edit"></i></a>
                                    {{-- <a href="javascript:void(0);"><i class="fe fe-trash-2"></i></a> --}}
                                </td>
                            </tr>
                            @endForEach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection