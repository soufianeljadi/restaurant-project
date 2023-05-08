@extends('restaurant.master')
@section('restaurant')
    <!-- /Navigation-->
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Ajouter une table </li>
            </ol>

            <!-- /box_general-->
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i>Nouveau table</h2>
                </div>
                <form method="post" action="{{ route('restaurant.table.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Numéro de table</label>
                                <input type="number" class="form-control" name="number">
                            </div>
                        </div>
                    </div>
                    <!-- /row-->
                    <div class="col-md-6">
                        <input type="hidden" class="form-control" name="restaurant_id"
                            value="{{ Auth::guard('restaurant')->user()->id }}">
                    </div>
                    <!-- /row-->
                    <div class="col-md-6">
                        <input type="hidden" class="form-control" name="status"
                            value="Disponible">
                    </div>
                    <!-- /row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Numéro d'invité</label>
                                <input type="number" class="form-control" name="guest_number">
                            </div>
                        </div>
                    </div>
                    <!-- /row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Emplacement</label>
                                <div class="styled-select">
                                    <select name="location">
                                        <option>Sur la terrasse</option>
                                        <option>A l'intérieur</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /row-->
                    <button class="btn_1 medium" type="submit">Créer une table</button>
                    </form>
            </div>

        </div>
        <!-- /.container-fluid-->
    </div>
    <!-- /.container-wrapper-->
@endsection
