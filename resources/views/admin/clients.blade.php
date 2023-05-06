@extends('admin.master')
@section('admin')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Clients</li>
            </ol>

            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Liste des clients
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Restaurant</th>
                                    <th>Status</th>
                                    <th>email</th>
                                    <th>Controle</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Restaurant</th>
                                    <th>Status</th>
                                    <th>email</th>
                                    <th>Controle</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($clients as $client)
                                    <tr>
                                        <td>{{ $client->id }} </td>
                                        <td>{{ $client->name }} </td>
                                        <td>{{ $client->status }} </td>
                                        <td>{{ $client->email }}</td>
                                        <td><a data-toggle="modal" href="#detailsModal_{{ $client->id }}"><strong>Modifier</strong></a> | <a data-toggle="modal"
                                                href="#deleteModal_{{ $client->id }}"><strong>Supprimer</strong></a>
                                        </td>
                                    </tr>
                                    <!-- details Modal-->
                                    <div class="modal fade" id="detailsModal_{{ $client->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Détails du client
                                                    </h5>
                                                    <button class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">Voici tous les détails sur le client<strong>
                                                        {{ $client->name }}</strong></br></br>

                                                            <form action="{{ route('client.update') }}" method="POST">
                                                                @csrf
                                                        <label>Nom du client</label>
                                                        <input type="text" name="name"
                                                            class="form-control"
                                                            value="{{ $client->name }}"></br>


                                                        <label>Email du client</label>
                                                        <input type="text" name="email"
                                                            class="form-control"
                                                            value="{{ $client->email }}"></br>


                                                            <input type="hidden" name="id" value="{{ $client->id }}">
                                                            <input type="submit"class="btn btn-success" value="Modifier" href="{{ route('client.update') }} ">
                                                            </form>



                                                </div>

                                            </div>
                                        </div>client
                                    </div>
                                    <!-- delete Modal-->
                                    <div class="modal fade" id="deleteModal_{{ $client->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModal_{{ $client->id }}">Supprimer client</h5>
                                                    <button class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">Sélectionnez "supprimer" ci-dessous si vous êtes prêt à supprimer ce client : {{ $client->name }}</div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button"
                                                        data-dismiss="modal">Annuler</button>
                                                        <form action="{{ route('client.delete') }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $client->id }}">
                                                            <input type="submit"class="btn btn-danger" value="Supprimer" href="{{ route('client.delete') }} ">

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
