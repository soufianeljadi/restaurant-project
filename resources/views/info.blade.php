@extends('master')
@section('guest')
    <main>
		<div class="hero_single version_3">
			<div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
                <div class="container">
                <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10 col-md-8">
                            <h1>Attirez de nouveaux clients</h1>
                            <p>Plus de réservations de restaurants du coin</p>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
            </div>
        </div>
        <!-- /hero_single -->
        <div class="bg_gray">
            <div class="container margin_60_40">
                <div class="main_title center">
                    <span><em></em></span>
                    <h2>Pourquoi soumettre à Resto</h2>
                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                </div>

                <div class="row justify-content-center align-items-center add_bottom_15">
                    <div class="col-lg-5">
                        <div class="box_about">
                            <h3>Boostez vos réservations</h3>
                            <p class="lead">Est falli invenire interpretaris id, magna libris sensibus mel id.</p>
                            <p>Per eu nostrud feugiat. Et quo molestiae persecuti neglegentur. At zril definitionem mei, vel
                                ei choro volumus. An tota nulla soluta has, ei nec essent audiam, te nisl dignissim vel. Ex
                                velit audire perfecto pro, ei mei doming vivendo legendos. Cu sit magna zril, an odio
                                delectus constituto vis. Vis ludus omnesque ne, est veri quaeque ad.</p>
                            <img src="{{ asset('assets-home/img/arrow_about.png') }}" alt="" class="arrow_1">
                        </div>
                    </div>
                    <div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
                        <img src="{{ asset('assets-home/img/about_1.svg') }}" alt="" class="img-fluid"
                            width="250" height="250">
                    </div>
                </div>
                <!-- /row -->
                <div class="row justify-content-center align-items-center add_bottom_15">
                    <div class="col-lg-5 pr-lg-5 text-center d-none d-lg-block">
                        <img src="{{ asset('assets-home/img/about_2.svg') }}" alt="" class="img-fluid"
                            width="250" height="250">
                    </div>
                    <div class="col-lg-5">
                        <div class="box_about">
                            <h3>Gérer facilement</h3>
                            <p class="lead">Fidéliser la clientèle en offrant un service de réservation multilingue de
                                premier ordre et des communications ciblées. Construisez une solide base de données clients,
                                connectez-vous facilement avec vos clients et gérez tous vos avis en quelques clics.</p>
                            <img src="{{ asset('assets-home/img/arrow_about.png') }}" alt="" class="arrow_2">
                        </div>
                    </div>
                </div>
                <!-- /row -->
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-5">
                        <div class="box_about">
                            <h3>Atteindre de nouveaux clients</h3>
                            <p class="lead">Est falli invenire interpretaris id, magna libris sensibus mel id.</p>
                            <p>Per eu nostrud feugiat. Et quo molestiae persecuti neglegentur. At zril definitionem mei, vel
                                ei choro volumus. An tota nulla soluta has, ei nec essent audiam, te nisl dignissim vel. Ex
                                velit audire perfecto pro, ei mei doming vivendo legendos. Cu sit magna zril, an odio
                                delectus constituto vis. Vis ludus omnesque ne, est veri quaeque ad.</p>
                        </div>

                    </div>
                    <div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
                        <img src="{{ asset('assets-home/img/about_3.svg') }}" alt="" class="img-fluid"
                            width="250" height="250">
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_gray -->





        <div class="bg_gray pattern" id="submit">
            <div class="container margin_60_40">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="text-center add_bottom_15">
                            <h4>Veuillez remplir le formulaire ci-dessous</h4>
                            <p>Id persius indoctum sed, audiam verear his in, te eum quot comprehensam. Sed impetus vocibus
                                repudiare et.</p>
                        </div>
                        <div id="message-register"></div>
                        <form method="post" action="{{ route('restaurant.register.create') }}">
                            @csrf
                            <h6>Données personnelles</h6>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nom du resto *"
                                        required  name="name" >
                                    </div>
                                </div>
                            </div>
                            <!-- /row -->
                            <div class="row add_bottom_15">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Emplacement du resto"
                                            name="location" >
                                    </div>
                                </div>
                            </div>
                            <div class="row add_bottom_15">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Descreption du resto"
                                            name="descreption" >
                                    </div>
                                </div>
                            </div>
                            <!-- /row -->
                            <h6>Login et mot de passe</h6>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Adresse e-mail *"
                                           required name="email" >
                                    </div>
                                </div>
                            </div>

                            <!-- /row -->
                            <div class="row add_bottom_15">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Mot de passe *" name="password"
                                        required >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Confirmez le mot de passe *" name="password_confirmation"
                                        required>
                                    </div>
                                </div>
                            </div>
                            <!-- /row -->
                            {{-- <h6>I am not a robot</h6>
                            <div class="row add_bottom_25">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" id="verify_register" class="form-control"
                                            placeholder="Human verify: 3 + 1 =?">
                                    </div>
                                </div>
                            </div> --}}
                            <!-- /row -->
                            <div class="form-group text-center"><input type="submit" class="btn_1" value="Submit"
                                    id="submit-register"></div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_gray -->

    </main>
    <!-- /main -->
@endsection
