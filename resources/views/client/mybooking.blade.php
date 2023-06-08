@extends('client.master')
@section('client')
    <title>Resto - Mes réservations</title>

    <main>

        <div class="container margin_detail">
            <div class="row">


                <h2 style="text-align: center">Mes réservations :</h2><br>
@if ($reservations->isEmpty())
<br><br><br>
<h5 style="text-align: center"> Aucune réservation pour le moment</h5>
<br><br><br>
@endif
                @foreach ($reservations as $reservation)
                    <div>
                        <h5> Nom du restaurant : {{ $reservation->table->restaurant->name }} </h5>
                        <br>

                        <div class="menu_item">
                            <strong>Yums</strong>
                            {{-- <h4>Reservation date </h4> --}}
                            <p>+ {{ $reservation->table->restaurant->yums }}</p>
                            <p></p>
                        </div>
                        <div class="menu_item">
                            <strong>Table</strong>
                            {{-- <h4>Reservation date </h4> --}}
                            <p>Numéro : {{ $reservation->table->number }} <br> Emplacement :
                                {{ $reservation->table->location }}
                             <br> Nombre des personnes :
                                {{ $reservation->table->guest_number }}</p>
                            <p></p>
                        </div>
                        <div class="menu_item">
                            <strong>Réservation Téléphone</strong>
                            {{-- <h4>Reservation date </h4> --}}
                            <p>{{ $reservation->reservation_tele }}</p>
                        </div>
                        <div class="menu_item">
                            <strong>Réservation E-mail</strong>
                            {{-- <h4>Reservation date </h4> --}}
                            <p>{{ $reservation->reservation_email }}</p>
                        </div>
                        <div class="menu_item">
                            <strong>Date de réservation</strong>
                            {{-- <h4>Reservation date </h4> --}}
                            <p>{{ $reservation->reservation_date }}</p>
                        </div>
                        <div class="menu_item">
                            <strong>Heure de réservation</strong>
                            {{-- <h4>Reservation time </h4> --}}
                            <p>{{ $reservation->reservation_time }}</p>
                        </div>
                        <a data-toggle="modal" href="#deleteModal_{{ $reservation->id }}"><strong>Supprimer
                                reservation</strong></a>
                        <hr>
                    </div>
                    <!-- delete Modal-->
                    <div class="modal fade" id="deleteModal_{{ $reservation->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModal_{{ $reservation->id }}">Supprimer réservation
                                    </h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Sélectionnez "supprimer" ci-dessous si vous êtes prêt à supprimer
                                    cette réservation </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                                    <form action="{{ route('reservation.delete') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $reservation->id }}">
                                        <input type="hidden" name="client_id" value="{{ $reservation->client->id }}">
                                        <input type="hidden" name="restaurant_id" value="{{ $reservation->table->restaurant->id }}">
                                        <input type="hidden" name="table_id" value="{{ $reservation->table->id }}">
                                        <input type="submit"class="btn btn-danger" value="Supprimer"
                                            href="{{ route('restaurant.delete') }} ">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        </div>
    </main>

@endsection
