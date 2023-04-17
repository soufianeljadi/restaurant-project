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
                                    <a data-bs-toggle="modal" href="detail_restaurant_{{ $restaurant->id }}"
                                        class="btn btn-sm bg-info-light">Details</a>
                                    {{-- <a data-bs-toggle="modal" class="btn btn-sm bg-warning-light">Modifier</a> --}}
                                    <a href="{{ route('restaurant.delete', $restaurant->id) }}"
                                        class="btn btn-sm bg-danger-light">Supprimer</a>
                                </td>
                            </tr>
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
                                                            <input type="text" name="name" class="form-control"
                                                                value="{{ $restaurant->name }}">
                                                        </div>
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
