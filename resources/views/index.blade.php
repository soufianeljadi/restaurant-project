<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Foogra - Discover & Book the best restaurants at the best price">
    <meta name="author" content="Ansonika">
    <title>Resto - Découvrez & Réservez</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="favicon.ico">


    <!-- GOOGLE WEB FONT -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" as="fetch" crossorigin="anonymous">
    <script type="text/javascript">
    !function(e,n,t){"use strict";var o="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap",r="__3perf_googleFonts_c2536";function c(e){(n.head||n.body).appendChild(e)}function a(){var e=n.createElement("link");e.href=o,e.rel="stylesheet",c(e)}function f(e){if(!n.getElementById(r)){var t=n.createElement("style");t.id=r,c(t)}n.getElementById(r).innerHTML=e}e.FontFace&&e.FontFace.prototype.hasOwnProperty("display")?(t[r]&&f(t[r]),fetch(o).then(function(e){return e.text()}).then(function(e){return e.replace(/@font-face {/g,"@font-face{font-display:swap;")}).then(function(e){return t[r]=e}).then(f).catch(a)):a()}(window,document,localStorage);
    </script>

    <!-- BASE CSS -->
    <link href="assets-home/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets-home/css/style.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="assets-home/css/home.css" rel="stylesheet">

    <!-- ALTERNATIVE COLORS CSS -->
	<link href="#" id="colors" rel="stylesheet">

</head>

<body>

	<header class="header clearfix element_to_stick">
		<div class="container">
		<div id="logo">
			<a href="/">
				<img src="assets-home/img/resto2.png" width="125" height="40" alt="" class="logo_normal">
				<img src="assets-home/img/resto.png" width="125" height="40" alt="" class="logo_sticky">
			</a>
		</div>
		<ul id="top_menu">
			<li><a href="{{ route('client.register') }}"  class="login">Login</a></li>
			{{-- <li><a href="wishlist.html" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li> --}}
		</ul>
		<!-- /top_menu -->
		<a href="#0" class="open_close">
			<i class="icon_menu"></i><span>Menu</span>
		</a>
		<nav class="main-menu">
			<div id="header_menu">
				<a href="#0" class="open_close">
					<i class="icon_close"></i><span>Menu</span>
				</a>
				<a href="index.html"><img src="img/logo.svg" width="140" height="35" alt=""></a>
			</div>
			<ul>
				<li class="submenu">
					<a href="#0" class="show-submenu">Login & Register</a>
					<ul>

						<li class="third-level"><a href="#0">Espace  <strong>Client!</strong></a>
							<ul>
								<li><a href="{{ route('client_login_form') }}">Connexion</a></li>
								<li><a href="{{ route('client.register') }}">Créer un compte</a></li>

							</ul>
						</li>
						<li class="third-level"><a href="#0">Espace  <strong>Restaurant!</strong></a>
							<ul>
								<li><a href="{{ route('login_form') }}">Connexion</a></li>
								<li><a href="{{ route('restaurant.register') }}">Registre votre restaurant</a></li>

							</ul>
						</li>
						<li class="third-level"><a href="#0">Espace  <strong>Admin!</strong></a>
							<ul>
								<li><a href="{{ route('admin_login_form') }}">Connexion</a></li>


							</ul>
						</li>
					</ul>
				</li>


				<li><a href="{{ route('restaurant.register') }}" target="_parent">Registre votre restaurant</a></li>
			</ul>
		</nav>
	</div>
	</header>
	<!-- /header -->

	<main>
		<div class="hero_single version_2">
			<div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-9 col-lg-10 col-md-8">
							<h1>Découvrez &amp; Réservez</h1>
							<p>le meilleur restaurant <span class="element" style="font-weight: 500"></span></p>
							{{-- <form method="post" action="grid-listing-filterscol.html">
								<div class="row g-0 custom-search-input">
									<div class="col-lg-4">
										<div class="form-group">
											<input class="form-control" type="text" placeholder="What are you looking for...">
											<i class="icon_search"></i>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<input class="form-control no_border_r" type="text" placeholder="Address, neighborhood...">
											<i class="icon_pin_alt"></i>
										</div>
									</div>
									<div class="col-lg-2">
										<input type="submit" value="Search">
									</div>
								</div>
								<!-- /row -->
							</form> --}}
						</div>
					</div>
					<!-- /row -->
				</div>
			</div>
		</div>


		<div class="container margin_60_40">
			<div class="main_title">
				<span><em></em></span>
				<h2>Restaurants populaires</h2>
				{{-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> --}}
				<a href="#0">View All</a>
			</div>

			<div class="owl-carousel owl-theme carousel_4">
			    <div class="item">
			        <div class="strip">
			            <figure>
			                <span class="ribbon off">-30%</span>
			                <img src="img/lazy-placeholder.png" data-src="img/location_1.jpg" class="owl-lazy" alt="">
			                <a href="detail-restaurant.html" class="strip_info">
			                    <small>Pizza</small>
			                    <div class="item_title">
			                        <h3>Da Alfredo</h3>
			                        <small>27 Old Gloucester St</small>
			                    </div>
			                </a>
			            </figure>
			            <ul>
			                <li><span class="loc_open">Now Open</span></li>
			                <li>
			                    <div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div>
			                </li>
			            </ul>
			        </div>
			    </div>
			</div>
			<!-- /carousel -->

			<div class="banner lazy" data-bg="url(assets-home/img/blog-1.jpg)">
				<div class="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.2)">
					<div>
						<small>Resto</small>
						<h3>Plus de 100 restaurants</h3>
						<p>Réservez une table facilement au meilleur prix</p>
						{{-- <a href="grid-listing-filterscol.html" class="btn_1">View All</a> --}}
					</div>
				</div>
				<!-- /wrapper -->
			</div>
			<!-- /banner -->



		<div class="call_section lazy" data-bg="url(img/reservation-bg.jpg)">
		    <div class="container clearfix">
		        <div class="col-lg-5 col-md-6 float-end wow">
		            <div class="box_1">
		                <h3>Êtes-vous un propriétaire de restaurant?</h3>
		                <p>Rejoignez-nous pour augmenter votre visibilité en ligne. Vous aurez accès à encore plus de clients qui souhaitent profiter de vos plats savoureux à la maison.</p>
		                <a href="{{ route ('restaurant.register') }}" class="btn_1">Enregistrer votre restaurant maintenant</a>
		            </div>
		        </div>
    		</div>
    	</div>
   		<!--/call_section-->

	</main>
	<!-- /main -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3 data-bs-target="#collapse_1">Liens rapides</h3>
					<div class="collapse dont-collapse-sm links" id="collapse_1">
						<ul>
							{{-- <li><a href="submit-rider.html">Become a Rider</a></li>
							<li><a href="submit-restaurant.html">Add your restaurant</a></li>
							<li><a href="help.html">Help</a></li>
							<li><a href="account.html">My account</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="contacts.html">Contacts</a></li> --}}
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3 data-bs-target="#collapse_2">Connexion</h3>
					<div class="collapse dont-collapse-sm links" id="collapse_2">
						<ul>
							<li><a href="{{ route('client_login_form') }}">Client</a></li>
							<li><a href="{{ route('login_form') }}">Proprietaire d'un restaurant</a></li>
							<li><a href="{{ route('admin_login_form') }}">administrateur</a></li>

						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
						<h3 data-bs-target="#collapse_3">Contacts</h3>
					<div class="collapse dont-collapse-sm contacts" id="collapse_3">
						<ul>
							<li><i class="icon_house_alt"></i>Fquih Ben Salah<br>MOROCCO</li>
							<li><i class="icon_mobile"></i>+212 642 912 362</li>
							<li><i class="icon_mail_alt"></i><a href="#0">Resto@mail.com</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
						{{-- <h3 data-bs-target="#collapse_4">Keep in touch</h3> --}}
					<div class="collapse dont-collapse-sm" id="collapse_4">
						{{-- <div id="newsletter">
							<div id="message-newsletter"></div>
							<form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
								<div class="form-group">
									<input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
									<button type="submit" id="submit-newsletter"><i class="arrow_carrot-right"></i></button>
								</div>
							</form>
						</div> --}}
						<div class="follow_us">
							<h5>Suivez-nous</h5>
							<ul>
								<li><a href="#0"><img  data-src="assets-home/img/facebook1.svg" alt="" class="lazy"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /row-->
			<hr>
		</div>
	</footer>
	<!--/footer-->

	<div id="toTop"></div><!-- Back to top button -->

	<div class="layer"></div><!-- Opacity Mask Menu Mobile -->


	<!-- COMMON SCRIPTS -->
    <script src="assets-home/js/common_scripts.min.js"></script>
    <script src="assets-home/js/common_func.js"></script>
    <script src="assets-home/assets/validate.js"></script>

    <!-- TYPE EFFECT -->
    <script src="assets-home/js/typed.min.js"></script>
    <script>
    	var typed = new Typed('.element', {
		  strings: ["au meilleur prix", "avec une nourriture unique", "avec un bel emplacement"],
		  startDelay: 10,
		  loop: true,
		  backDelay: 2000,
		  typeSpeed: 50
		});
    </script>

    <!-- COLOR SWITCHER  -->


</body>
</html>
