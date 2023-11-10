@extends('admin::layout.base')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Hall
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <i class="fas fa-user"></i>
                                    {{number_format($hallCount)}}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-eye fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Annual) Card Example -->
            <div class="col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Brands (All)
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <i class="fas fa-user"></i>
                                    {{number_format($brandCount)}}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-eye fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-12">

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <td>Brand</td>
                        <td>Views</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($brands as $brand)
                        <tr>
                            <td>{{$brand->name}}</td>
                            <td>{{$brand->visitLogs()->count()}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


            </div>

        </div>

    </div>
@stop
