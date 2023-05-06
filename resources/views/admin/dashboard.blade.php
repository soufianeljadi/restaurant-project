@extends('admin.master')
@section('admin')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <!-- Icon Cards-->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-primary o-hidden h-100">
                        <div class="card-body">

                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-calendar-check-o"></i>
                            </div>
                            <div class="mr-5">
                                <h5>{{ $nbr_resto }} Restaurants !</h5>
                            </div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="{{ route('Admin.restaurants') }}">
                            <span class="float-left">Voir les détails</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-warning o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-calendar-check-o"></i>
                            </div>
                            <div class="mr-5">
                                <h5>{{ $nbr_client }} Clients !</h5>
                            </div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="{{ route('Admin.clients') }}">
                            <span class="float-left">Voir les détails</span>
                            <span class="float-right">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
