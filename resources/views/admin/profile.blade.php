@extends('admin.master')
@section('admin')
    <!-- /Navigation-->

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Mon profi</li>
            </ol>
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-user"></i>Détails du profil</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Your photo :</label><br>
                            <img src="{{ asset('img/manager.png') }}" width="170" height="170"></img>
                        </div>
                    </div>

                    <div class="col-md-8 add_top_30">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input type="text" class="form-control" disabled
                                        value="{{ Auth::guard('admin')->user()->name }}">
                                </div>
                            </div>

                        </div>
                        <!-- /row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" disabled
                                        value="{{ Auth::guard('admin')->user()->email }}">
                                </div>
                            </div>

                        </div>

                        <!-- /row-->
                        {{-- <p><a href="#0" class="btn_1 medium">Save</a></p> --}}
                    </div>
                </div>
            </div>

        </div>
        <!-- /row-->
    </div>
    <!-- /.container-fluid-->