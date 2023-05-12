@extends('restaurant.master')
@section('restaurant')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Tables</li>
            </ol>

            <!-- Example DataTables Card-->
            {{-- <a class="btn_1 medium" href="{{ route('restaurant.table.create') }}">Ajouter une table</a></br> --}}
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Liste des tables
                </div>
                <div class="card-body">
        
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Numéro de table</th>
                                    <th>Statut</th>
                                    <th>Emplacement</th>
                                    <th>Numéro d'invité</th>
                                    <th>Contrôle</th>
                                </tr>

                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Numéro de table</th>
                                    <th>Statut</th>
                                    <th>Emplacement</th>
                                    <th>Numéro d'invité</th>
                                    <th>Contrôle</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach (Auth::guard('restaurant')->user()->tables as $table)
                                    <tr>
                                        <td>{{ $table->number }} </td>
                                        <td>{{ $table->status }} </td>
                                        <td>{{ $table->location }} </td>
                                        <td>{{ $table->guest_number }}</td>
                                        <td><a data-toggle="modal"
                                                href="#detailsModal_{{ $table->id }}"><strong>Modifier</strong></a> | <a
                                                data-toggle="modal"
                                                href="#deleteModal_{{ $table->id }}"><strong>Supprimer</strong></a>
                                        </td>
                                    </tr>
                                    <!-- details Modal-->
                                    <div class="modal fade" id="detailsModal_{{ $table->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Détails du table
                                                    </h5>
                                                    <button class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">Voici tous les détails sur le table numéro <strong>
                                                    {{ $table->number }}</strong></br></br>
                                                    <form action="{{ route('table.update') }}" method="POST">
                                                        @csrf
                                                        <label>Numéro de table</label>
                                                        <input type="number" name="number" class="form-control"
                                                            value="{{ $table->number }}"></br>
                                                        <label>Statut</label>
                                                            <select class="form-control" name="status" >
                                                                <option value="Indisponible" {{ $table->status == "Indisponible" ? "selected" : "" }}>Indisponible</option>
                                                                <option value="Disponible" {{ $table->status == "Disponible" ? "selected" : "" }}>Disponible</option>
                                                            </select></br>
                                                        <label>Emplacement</label>
        `
                                                        <select class="form-control" name="location" >
                                                            <option value="Sur la terrasse" {{ $table->location == "Sur la terrasse" ? "selected" : "" }}>Sur la terrasse</option>
                                                            <option value="A l'intérieur" {{ $table->location == "A l'intérieur" ? "selected" : "" }}>A l'intérieur</option>
                                                        </select></br>
                                                        <label>Numéro d'invité</label>
                                                        <input type="text" name="guest_number" class="form-control"
                                                            value="{{ $table->guest_number }}"></br>
                                                        <input type="hidden" name="id" value="{{ $table->id }}">
                                                        <input type="submit"class="btn btn-success" value="Modifier"
                                                            href="{{ route('table.update') }} ">
                                                    </form>



                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- delete Modal-->
                                    <div class="modal fade" id="deleteModal_{{ $table->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModal_{{ $table->id }}">Supprimer
                                                        table</h5>
                                                    <button class="close" type="button" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">Sélectionnez "supprimer" ci-dessous si vous êtes
                                                    prêt à supprimer ce table : {{ $table->name }}</div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button"
                                                        data-dismiss="modal">Annuler</button>
                                                    <form action="{{ route('table.delete') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $table->id }}">
                                                        <input type="submit"class="btn btn-danger" value="Supprimer"
                                                            href="{{ route('table.delete') }} ">

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
