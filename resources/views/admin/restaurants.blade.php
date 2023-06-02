@extends('admin.master')
@section('admin')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Restaurants</li>
            </ol>

            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Liste des restaurants
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Restaurant</th>
                                    <th>Yums</th>
                                    <th>Email</th>
                                    <th>Contrôle</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Restaurant</th>
                                    <th>Yums</th>
                                    <th>Email</th>
                                    <th>Contrôle</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($restaurants as $restaurant)
                                    <tr>
                                        <td>{{ $restaurant->id }} </td>
                                        <td>{{ $restaurant->name }} </td>
                                        <td>{{ $restaurant->yums }} </td>
                                        <td>{{ $restaurant->email }}</td>
                                        <td><a data-toggle="modal" href="#detailsModal_{{ $restaurant->id }}"><strong>Modifier
                                                    </strong></a> | <a data-toggle="modal"
                                                href="#deleteModal_{{ $restaurant->id }}"><strong>Supprimer</strong></a>
                                        </td>
                                    </tr>
                                    <!-- details Modal-->
                                    <div class="modal fade" id="detailsModal_{{ $restaurant->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modifier restaurant
                                                    </h5>
                                                    <button class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">Voici tous les détails sur le restaurant<strong>
                                                        {{ $restaurant->name }}</strong></br></br>
                                                        <form action="{{ route('restaurant.update') }}" method="POST">
                                                            @csrf
                                                    <label>Nom du resto</label>
                                                    <input type="text" name="name"
                                                        class="form-control"
                                                        value="{{ $restaurant->name }}"></br>

                                                    <label>Emplacement du resto</label>
                                                    <input type="text" name="location"
                                                        class="form-control"
                                                        value="{{ $restaurant->location }}"></br>

                                                    <label>Description du resto</label>
                                                    <input type="text" name="description"
                                                        class="form-control"
                                                        value="{{ $restaurant->description }}"></br>

                                                    <label>Email du resto</label>
                                                    <input type="text" name="email"
                                                        class="form-control"
                                                        value="{{ $restaurant->email }}"></br>
                                                    <label>Yums du resto</label>
                                                    <input type="text" name="yums"
                                                        class="form-control"
                                                        value="{{ $restaurant->yums }}"></br>


                                                        <input type="hidden" name="id" value="{{ $restaurant->id }}">
                                                        <input type="submit"class="btn btn-success" value="Modifier" href="{{ route('restaurant.update') }} ">
                                                        </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- delete Modal-->
                                    <div class="modal fade" id="deleteModal_{{ $restaurant->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModal_{{ $restaurant->id }}">Supprimer restaurant</h5>
                                                    <button class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">Sélectionnez "supprimer" ci-dessous si vous êtes prêt à supprimer ce restaurant : {{ $restaurant->name }}</div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button"
                                                        data-dismiss="modal">Annuler</button>
                                                        <form action="{{ route('restaurant.delete') }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $restaurant->id }}">
                                                            <input type="submit"class="btn btn-danger" value="Supprimer" href="{{ route('restaurant.delete') }} ">

                                                        </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
            <!-- /tables-->
        </div>
        <!-- /container-fluid-->
    </div>
@endsection
