@extends('client.client_master')
@section('client')
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Faire une réservation</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Réservation</a></li>
									<li class="breadcrumb-item active">Reserve maintenant</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Basic Inputs</h4>
								</div>
								<div class="card-body">
									<form action="#">
										<div class="form-group row">
											<label class="col-form-label col-md-2">Nom</label>
											<div class="col-md-10">
												<input type="text" class="form-control" name="reservation_name" value="{{  Auth::guard('client')->user()->name }}">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-2">Email</label>
											<div class="col-md-10">
												<input type="email" class="form-control"name="reservation_email" value="{{  Auth::guard('client')->user()->email }}">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-2">Telephone</label>
											<div class="col-md-10">
												<input type="number" class="form-control" name="reservation_tele" placeholder="Votre téléphone">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-2">Nombre de personnes</label>
											<div class="col-md-10">
												<input type="number" class="form-control" name="number_of_persons">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-2">Choisi un restaurant</label>
											<div class="col-md-10">
												<select class="form-control" name="reservation_restaurant">
                                                    <option disabled selected>-- Sélectionner restaurant --</option>
                                                    @foreach ($restaurants as $restaurant)
                                                        <option value="{{ $restaurant->id }}">{{ $restaurant->nom }}</option>
                                                    @endforeach
                                                </select>

											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-2">File Input</label>
											<div class="col-md-10">
												<input class="form-control" type="file">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-2">Default Select</label>
											<div class="col-md-10">
												<select class="form-control">
													<option>-- Select --</option>
													<option>Option 1</option>
													<option>Option 2</option>
													<option>Option 3</option>
													<option>Option 4</option>
													<option>Option 5</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-2">Radio</label>
											<div class="col-md-10">
												<div class="radio">
													<label>
														<input type="radio" name="radio"> Option 1
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" name="radio"> Option 2
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" name="radio"> Option 3
													</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-2">Checkbox</label>
											<div class="col-md-10">
												<div class="checkbox">
													<label>
														<input type="checkbox" name="checkbox"> Option 1
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input type="checkbox" name="checkbox"> Option 2
													</label>
												</div>
												<div class="checkbox">
													<label>
														<input type="checkbox" name="checkbox"> Option 3
													</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-2">Textarea</label>
											<div class="col-md-10">
												<textarea rows="5" cols="5" class="form-control" placeholder="Enter text here"></textarea>
											</div>
										</div>
										<div class="form-group mb-0 row">
											<label class="col-form-label col-md-2">Input Addons</label>
											<div class="col-md-10">
												<div class="input-group">
													<span class="input-group-text">$</span>
													<input class="form-control" type="text">
													<button class="btn btn-primary" type="button">Button</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							{{-- <div class="card">
								<div class="card-header">
									<h4 class="card-title">Input Sizes</h4>
								</div>
								<div class="card-body">
									<form action="#">
										<div class="form-group row">
											<label class="col-form-label col-md-2">Large Input</label>
											<div class="col-md-10">
												<input type="text" class="form-control form-control-lg" placeholder=".form-control-lg">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-2">Default Input</label>
											<div class="col-md-10">
												<input type="text" class="form-control" placeholder=".form-control">
											</div>
										</div>
										<div class="form-group mb-0 row">
											<label class="col-form-label col-md-2">Small Input</label>
											<div class="col-md-10">
												<input type="text" class="form-control form-control-sm" placeholder=".form-control-sm">
											</div>
										</div>
									</form>
								</div> --}}
							{{-- </div> --}}
						</div>
					</div>

				</div>
			</div>
			<!-- /Main Wrapper -->

        </div>
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
