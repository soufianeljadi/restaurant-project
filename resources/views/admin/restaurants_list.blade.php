@extends('admin.admin_master')
@section('admin')
    <div class="content container-fluid">



        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">La liste des restaurants</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Ce tableau contient tous les restaurants et leurs informations
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-body">



            <div class="table-responsive ">
                <table class="datatable table table-stripped" id="myTable">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nom du resto</th>
                            <th>Status</th>
                            <th>Email</th>
                            <th>Controle</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($restaurants as $restaurant)
                            <tr>
                                <td>{{ $restaurant->id }} </td>
                                <td>{{ $restaurant->name }} </td>
                                <td>{{ $restaurant->status }} </td>
                                <td>{{ $restaurant->email }}</td>
                                <td>
                                    <a data-bs-toggle="modal" href="#detail_restaurant_{{ $restaurant->id }}"
                                        class="btn btn-sm bg-info-light"><i class="fa-solid fa-pen-to-square">Détails</i></a>
                                    {{-- <a data-bs-toggle="modal" href="detail_restaurant_{{ $restaurant->id }}"
                                        class="btn btn-sm bg-info-light">Details</a> --}}
                                    {{-- <a data-bs-toggle="modal" class="btn btn-sm bg-warning-light">Modifier</a> --}}
                                    <button type="button" class="btn btn-sm bg-danger-light" data-bs-toggle="modal"
                                        data-bs-target="#delete_restaurant_{{ $restaurant->id }}">
                                        <i class="fa-solid fa-trash-can">Supprimer</i>
                                </td>
                            </tr>
                            {{-- delete model --}}
                            <div class="modal fade" id="delete_restaurant_{{ $restaurant->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer Restaurant</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                Êtes-vous sûr de supprimer Restaurant : <br>
                                                {{ $restaurant->name }}

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>

                                            <form action="{{ route('restaurant.delete') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $restaurant->id }}">
                                                <input type="submit" value="Supprimer" class="btn btn-danger">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Details model --}}
                            <div class="modal fade" id="detail_restaurant_{{ $restaurant->id }}" aria-hidden="true"
                                role="dialog">
                                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Details Restaurant</h5>
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            {{-- <form action="{{ route('Admin.restaurants') }}" method="get">
                                                @csrf --}}
                                            <input type="hidden" name="id" value="{{ $restaurant->id }}">
                                            <div class="row form-row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label>Nom du resto</label>
                                                        <input type="text" name="name" class="form-control"readonly="readonly"
                                                            value="{{ $restaurant->name }}">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <label class="col-form-label col-md-2">Email</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" value="{{ $restaurant->email }}" readonly="readonly">
                                                    </div>
                                            </div>
                                            {{-- </form> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- Detail --}}

        </div>
    </div>
@endsection