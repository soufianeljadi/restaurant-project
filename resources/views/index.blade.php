@extends('master')
@section('guest')
<title>Resto - Découvrez & Réservez</title>

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
				<a href="{{ route('view_all') }}">View All</a>
			</div>

			<div class="owl-carousel owl-theme carousel_4">
            @foreach ($restaurants as $restaurant)
			    <div class="item">
			        <div class="strip">
			            <figure>
			                <span class="ribbon off">-30%</span>
			                <img src="{{ asset('assets-home/img/lazy-placeholder.png') }}" data-src="{{ asset('assets-home/img/location_1.jpg') }}" class="owl-lazy" alt="">
			                <a href="detail-restaurant.html" class="strip_info">
			                    <small>{{ $restaurant->name }}</small>
			                    <div class="item_title">
			                        <h3>{{ $restaurant->name }}</h3>
			                        <small>{{ $restaurant->location }}</small>
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
                @endforeach
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
		                <a href="{{ route ('info') }}" class="btn_1">En savoir plus</a>
		            </div>
		        </div>
    		</div>
    	</div>
   		<!--/call_section-->

	</main>
	<!-- /main -->
@endsection
