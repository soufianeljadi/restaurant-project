@extends('restaurant.restaurant_master')
@section('restaurant')
    <!-- Page Wrapper -->
    {{-- {{-- <div class="page-wrapper"> --}}
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Ajouter une table</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Tables</a></li>
                            <li class="breadcrumb-item active">Ajouter une table</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                {{-- <div class="col-lg-12"> --}}
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Table formulaire</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('restaurant.table.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Numéro de table</label>
                                <div class="col-md-10">
                                    <input type="number" class="form-control" name="number">
                                </div>
                            </div>
                            <div class="form-group row">

                                <div class="col-md-10">
                                    <input  type="hidden" class="form-control" name="restaurant_id"
                                        value="{{ Auth::guard('restaurant')->user()->id }}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Nombre de personnes</label>
                                <div class="col-md-10">
                                    <input type="number" class="form-control"name="guest_number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Emplacement</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="location">
                                        <option>Sur la terrasse</option>
                                        <option>A l'intérieur</option>
                                    </select>
                                </div>
                            </div>
                            <button class="btn btn-primary login-btn" type="submit">Créer une table</button>

                            {{-- <div class="form-group row">
                                <div class="col-md-10">
                                    <button class="btn btn-primary" type="button">Button</button>
                                </div>
                            </div> --}}
                        </form>
                    </div>
                </div>
                {{-- </div> --}}
            </div>
        </div>

    </div> --}}
@endsection
<!-- /Main Wrapper -->
{{--
		<!-- jQuery -->
		<script src="assets/js/jquery-3.6.0.min.js"></script>

		<!-- Bootstrap Core JS -->
		<script src="assets/js/bootstrap.bundle.min.js"></script>

		<!-- Feather Icon JS -->
		<script src="assets/js/feather.min.js"></script>

		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script> --}}

</body>

</html>
