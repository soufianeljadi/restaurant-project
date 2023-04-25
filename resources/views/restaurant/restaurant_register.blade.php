<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<title>Restaurant - Register</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

		<!-- Favicon -->
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('assets1/css/bootstrap.min.css') }}">

		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{ asset('assets1/plugins/fontawesome/css/fontawesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets1/plugins/fontawesome/css/all.min.css') }}">

		<!-- Main CSS -->
		<link rel="stylesheet" href="{{ asset('assets1/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets1/css/restaurant.css') }}">

	</head>
	<body class="account-page">

		<!-- Main Wrapper -->
		<div class="main-wrapper">


			<!-- Page Content -->
			<div class="bg-pattern-style">
				<div class="content">

					<!-- Register Content -->
					<div class="account-content">
						<div class="account-box">
							<div class="login-right">
								<div class="login-header">
                                    <a href="/" class="home-icon"><i class="fas fa-arrow-circle-left"></i></a>

									<h3><span>Restaurant</span> Register</h3>
									<p class="text-muted"><br>Vous souhaitez augmenter les revenus de votre restaurant et optimiser votre activité ?<br>
                                        Commencez à capturer plus de réservations de clients du coin de la rue et du monde entier</p>
								</div>

								<!-- Register Form -->
								<form method="post" action="{{ route('restaurant.register.create') }}">
                                    @csrf
                                    <div class="form-group">

                                            <div class="form-group">
                                                <label class="form-control-label">Nom du resto</label>
                                                <input  type="text" class="form-control" name="name" autofocus="">
                                            </div>
                                        </div>
                                        <div class="form-group">
										<label class="form-control-label">Adresse e-mail</label>
										<input  type="email" name="email"class="form-control">
                                    </div>
									<div class="row">
                                        <div class="col-lg-6">
											<div class="form-group">
												<label class="form-control-label">Mot de passe</label>
												<input  type="password" class="form-control" name="password">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label class="form-control-label">Confirmez le mot de passe</label>
												<input  type="password" class="form-control" name="password_confirmation">
											</div>
										</div>
									</div>
                                </div>
									{{-- <div class="form-group">
										<div class="form-check form-check-xs custom-checkbox">
											<input type="checkbox" class="form-check-input" name="agreeCheckboxUser" id="agree_checkbox_user">
											<label class="form-check-label" for="agree_checkbox_user">I agree to Mentoring</label> <a tabindex="-1" href="javascript:void(0);">Privacy Policy</a> &amp; <a tabindex="-1" href="javascript:void(0);"> Terms.</a>
										</div>
									</div> --}}
									<button class="btn btn-primary login-btn" type="submit">Créer un compte</button>
									<div class="account-footer text-center mt-3">
										Vous avez déjà un compte? <a class="forgot-link mb-0" href="{{ route('login_form') }}">Login</a>
									</div>
								</form>
								<!-- /Register Form -->

							</div>
						</div>
					</div>
					<!-- /Register Content -->

				</div>

			</div>
			<!-- /Page Content -->

		</div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
		<script src="{{ asset('assets1/js/jquery-3.6.0.min.js') }}"></script>

		<!-- Bootstrap Core JS -->
		<script src="{{ asset('assets1/js/bootstrap.bundle.min.js') }}"></script>

		<!-- Custom JS -->
		<script src="{{ asset('assets1/js/script.js') }}"></script>

	</body>
</html>
