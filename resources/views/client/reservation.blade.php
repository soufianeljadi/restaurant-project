@extends('client.master')
@section('client')
<title>Resto - Reservation</title>
    <main>

        <div class="container margin_detail">
            <div class="row">
                <div class="col-lg-8">
                    <div class="detail_page_head clearfix">
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="{{ route('view_all') }}">View restaurant</a></li>
                                <li>Reservation</li>
                            </ul>
                        </div>
                        <div class="title">
                            <br>
                            <h1>{{ $restaurant->name }}</h1>
                            {{ $restaurant->location }}
                            {{-- <a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="blank">Get directions</a> --}}
                            {{-- <ul class="tags">
                            <li><a href="#0">Pizza</a></li>
                            <li><a href="#0">Italian Food</a></li>
                            <li><a href="#0">Best Price</a></li>
                        </ul> --}}
                        </div>
                        {{-- <div class="rating">
                        <div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div>
                    </div> --}}
                    </div>
                    <!-- /detail_page_head -->

                    {{-- <div class="owl-carousel owl-theme carousel_1 magnific-gallery">
                    <div class="item">
                        <a href="img/location_1.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="img/detail_1.jpg" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="img/location_1.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="img/lazy-placeholder-detail.png" data-src="img/detail_2.jpg" class="owl-lazy" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="img/location_1.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="img/lazy-placeholder-detail.png" data-src="img/detail_3.jpg" class="owl-lazy" alt=""></a>
                    </div>
                </div> --}}
                    <!-- /carousel -->

                    {{-- <div class="tabs_detail">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a id="tab-A" href="#pane-A" class="nav-link active" data-bs-toggle="tab" role="tab">Information</a>
                        </li>
                        <li class="nav-item">
                            <a id="tab-B" href="#pane-B" class="nav-link" data-bs-toggle="tab" role="tab">Reviews</a>
                        </li>
                    </ul>

                    <div class="tab-content" role="tablist">
                        <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
                            <div class="card-header" role="tab" id="heading-A">
                                <h5>
                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
                                        Information
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
                                <div class="card-body info_content">
                                    <h2>Da Alfredo Menu</h2>
                                    <h3>Starters</h3>
                                    <div class="menu_item">
                                        <em>€9.90</em>
                                        <h4>Imported Salmon Steak</h4>
                                        <p>Base de arroz, aguacate, salmón noruego, semillas de sésamo, edamame, wakame y soja light</p>
                                    </div>
                                    <div class="menu_item">
                                        <em>€7.90</em>
                                        <h4>Poke bol</h4>
                                        <p>Queso de cabra light, dátiles, jamón serrano y rúcula</p>
                                    </div>
                                    <div class="menu_item">
                                        <em>€8.90</em>
                                        <h4>Ensalada cesar</h4>
                                        <p>lechuga, tomate, espinacas, pollo asado, picatostes, queso proteínico y salsa césar 0%</p>
                                    </div>
                                    <hr>
                                    <h3>Main Course</h3>
                                    <div class="menu_item">
                                        <em>€15.90</em>
                                        <h4>Oriental</h4>
                                        <p>Cama de tabule con taquitos de pollo a la mostaza light</p>
                                    </div>
                                    <div class="menu_item">
                                        <em>€11.90</em>
                                        <h4>Vegan Burguer</h4>
                                        <p>Medio pollo asado acompañado de arroz o patatas al toque masala</p>
                                    </div>
                                    <div class="menu_item">
                                        <em>€10.90</em>
                                        <h4>Indio Fit</h4>
                                        <p>lechuga, tomate, espinacas, pollo asado, picatostes, queso proteínico y salsa césar 0%</p>
                                    </div>
                                    <div class="content_more">
                                        <div class="menu_item">
                                            <em>€15.90</em>
                                            <h4>Oriental</h4>
                                            <p>Cama de tabule con taquitos de pollo a la mostaza light</p>
                                        </div>
                                        <div class="menu_item">
                                            <em>€11.90</em>
                                            <h4>Vegan Burguer</h4>
                                            <p>Medio pollo asado acompañado de arroz o patatas al toque masala</p>
                                        </div>
                                        <div class="menu_item">
                                            <em>€10.90</em>
                                            <h4>Indio Fit</h4>
                                            <p>lechuga, tomate, espinacas, pollo asado, picatostes, queso proteínico y salsa césar 0%</p>
                                        </div>
                                    </div>
                                    <!-- /content_more -->
                                    <a href="#0" class="show_hide" data-content="toggle-text">Read More</a>
                                    <hr>
                                    <h3>Dessert</h3>
                                    <div class="menu_item">
                                        <em>€15.90</em>
                                        <h4>Oriental</h4>
                                        <p>Cama de tabule con taquitos de pollo a la mostaza light</p>
                                    </div>
                                    <div class="menu_item">
                                        <em>€11.90</em>
                                        <h4>Vegan Burguer</h4>
                                        <p>Medio pollo asado acompañado de arroz o patatas al toque masala</p>
                                    </div>
                                    <div class="menu_item">
                                        <em>€10.90</em>
                                        <h4>Indio Fit</h4>
                                        <p>lechuga, tomate, espinacas, pollo asado, picatostes, queso proteínico y salsa césar 0%</p>
                                    </div>
                                    <div class="content_more">
                                        <div class="menu_item">
                                            <em>€15.90</em>
                                            <h4>Oriental</h4>
                                            <p>Cama de tabule con taquitos de pollo a la mostaza light</p>
                                        </div>
                                        <div class="menu_item">
                                            <em>€11.90</em>
                                            <h4>Vegan Burguer</h4>
                                            <p>Medio pollo asado acompañado de arroz o patatas al toque masala</p>
                                        </div>
                                        <div class="menu_item">
                                            <em>€10.90</em>
                                            <h4>Indio Fit</h4>
                                            <p>lechuga, tomate, espinacas, pollo asado, picatostes, queso proteínico y salsa césar 0%</p>
                                        </div>
                                    </div>
                                    <!-- /content_more -->
                                    <a href="#0" class="show_hide" data-content="toggle-text">Read More</a>

                                    <div class="add_bottom_45"></div>
                                    <h2>Pictures from our users</h2>
                                    <div class="pictures magnific-gallery clearfix">
                                        <figure><a href="img/detail_gallery/detail_1.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="img/thumb_detail_placeholder.jpg" data-src="img/thumb_detail_1.jpg" class="lazy" alt=""></a></figure>
                                        <figure><a href="img/detail_gallery/detail_2.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="img/thumb_detail_placeholder.jpg" data-src="img/thumb_detail_2.jpg" class="lazy" alt=""></a></figure>
                                        <figure><a href="img/detail_gallery/detail_3.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="img/thumb_detail_placeholder.jpg" data-src="img/thumb_detail_3.jpg" class="lazy" alt=""></a></figure>
                                        <figure><a href="img/detail_gallery/detail_4.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="img/thumb_detail_placeholder.jpg" data-src="img/thumb_detail_4.jpg" class="lazy" alt=""></a></figure>
                                        <figure><a href="img/detail_gallery/detail_5.jpg" title="Photo title" data-effect="mfp-zoom-in"><span class="d-flex align-items-center justify-content-center">+10</span><img src="img/thumb_detail_placeholder.jpg" data-src="img/thumb_detail_5.jpg" class="lazy" alt=""></a></figure>
                                    </div>
                                    <!-- /pictures -->

                                    <div class="special_offers add_bottom_45">
                                        <h2>Special Offers</h2>
                                        <div class="menu_item">
                                            <em>€10.90</em>
                                            <h4>Indio Fit</h4>
                                            <p>lechuga, tomate, espinacas, pollo asado, picatostes, queso proteínico y salsa césar 0%</p>
                                        </div>
                                        <div class="menu_item">
                                            <em>€15.90</em>
                                            <h4>Oriental</h4>
                                            <p>Cama de tabule con taquitos de pollo a la mostaza light</p>
                                        </div>
                                        <div class="menu_item">
                                            <em>€11.90</em>
                                            <h4>Vegan Burguer</h4>
                                            <p>Medio pollo asado acompañado de arroz o patatas al toque masala</p>
                                        </div>
                                        <div class="menu_item">
                                            <em>€10.90</em>
                                            <h4>Indio Fit</h4>
                                            <p>lechuga, tomate, espinacas, pollo asado, picatostes, queso proteínico y salsa césar 0%</p>
                                        </div>
                                    </div>
                                    <!-- /special_offers -->

                                    <div class="other_info">
                                    <h2>How to get to Pizzeria Alfredo</h2>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h3>Address</h3>
                                            <p>27 Old Gloucester St, 4530<br><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="blank"><strong>Get directions</strong></a></p>
                                            <strong>Follow Us</strong><br>
                                            <p class="follow_us_detail"><a href="#0"><i class="social_facebook_square"></i></a><a href="#0"><i class="social_instagram_square"></i></a><a href="#0"><i class="social_twitter_square"></i></a></p>
                                        </div>
                                        <div class="col-md-4">
                                            <h3>Opening Time</h3>
                                            <p><strong>Lunch</strong><br> Mon. to Sat. 11.00am - 3.00pm<p>
                                            <p><strong>Dinner</strong><br> Mon. to Sat. 6.00pm- 1.00am</p>
                                            <p><span class="loc_closed">Sunday Closed</span></p>
                                        </div>
                                        <div class="col-md-4">
                                            <h3>Services</h3>
                                            <p><strong>Credit Cards</strong><br> Mastercard, Visa, Amex</p>
                                            <p><strong>Other</strong><br> Wifi, Parking, Wheelchair Accessible</p>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /tab -->

                        <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                            <div class="card-header" role="tab" id="heading-B">
                                <h5>
                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
                                        Reviews
                                    </a>
                                </h5>
                            </div>
                            <div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">
                                <div class="card-body reviews">
                                    <div class="row add_bottom_45 d-flex align-items-center">
                                        <div class="col-md-3">
                                            <div id="review_summary">
                                                <strong>8.5</strong>
                                                <em>Superb</em>
                                                <small>Based on 4 reviews</small>
                                            </div>
                                        </div>
                                        <div class="col-md-9 reviews_sum_details">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h6>Food Quality</h6>
                                                    <div class="row">
                                                        <div class="col-xl-10 col-lg-9 col-9">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-3"><strong>9.0</strong></div>
                                                    </div>
                                                    <!-- /row -->
                                                    <h6>Service</h6>
                                                    <div class="row">
                                                        <div class="col-xl-10 col-lg-9 col-9">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-3"><strong>9.5</strong></div>
                                                    </div>
                                                    <!-- /row -->
                                                </div>
                                                <div class="col-md-6">
                                                    <h6>Location</h6>
                                                    <div class="row">
                                                        <div class="col-xl-10 col-lg-9 col-9">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-3"><strong>6.0</strong></div>
                                                    </div>
                                                    <!-- /row -->
                                                    <h6>Price</h6>
                                                    <div class="row">
                                                        <div class="col-xl-10 col-lg-9 col-9">
                                                            <div class="progress">
                                                                <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2 col-lg-3 col-3"><strong>6.0</strong></div>
                                                    </div>
                                                    <!-- /row -->
                                                </div>
                                            </div>
                                            <!-- /row -->
                                        </div>
                                    </div>

                                    <div id="reviews">
                                        <div class="review_card">
                                            <div class="row">
                                                <div class="col-md-2 user_info">
                                                    <figure><img src="img/avatar4.jpg" alt=""></figure>
                                                    <h5>Lukas</h5>
                                                </div>
                                                <div class="col-md-10 review_content">
                                                    <div class="clearfix add_bottom_15">
                                                        <span class="rating">8.5<small>/10</small> <strong>Rating average</strong></span>
                                                        <em>Published 54 minutes ago</em>
                                                    </div>
                                                    <h4>"Great Location!!"</h4>
                                                    <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.</p>
                                                    <ul>
                                                        <li><a href="#0"><i class="icon_like"></i><span>Useful</span></a></li>
                                                        <li><a href="#0"><i class="icon_dislike"></i><span>Not useful</span></a></li>
                                                        <li><a href="#0"><i class="arrow_back"></i> <span>Reply</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /row -->
                                        </div>
                                        <!-- /review_card -->
                                        <div class="review_card">
                                            <div class="row">
                                                <div class="col-md-2 user_info">
                                                    <figure><img src="img/avatar6.jpg" alt=""></figure>
                                                    <h5>Lukas</h5>
                                                </div>
                                                <div class="col-md-10 review_content">
                                                    <div class="clearfix add_bottom_15">
                                                        <span class="rating">8.5<small>/10</small> <strong>Rating average</strong></span>
                                                        <em>Published 10 Oct. 2019</em>
                                                    </div>
                                                    <h4>"Awesome Experience"</h4>
                                                    <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.</p>
                                                    <ul>
                                                        <li><a href="#0"><i class="icon_like"></i><span>Useful</span></a></li>
                                                        <li><a href="#0"><i class="icon_dislike"></i><span>Not useful</span></a></li>
                                                        <li><a href="#0"><i class="arrow_back"></i> <span>Reply</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /row -->
                                        </div>
                                        <!-- /review_card -->
                                        <div class="review_card">
                                            <div class="row">
                                                <div class="col-md-2 user_info">
                                                    <figure><img src="img/avatar1.jpg" alt=""></figure>
                                                    <h5>Marika</h5>
                                                </div>
                                                <div class="col-md-10 review_content">
                                                    <div class="clearfix add_bottom_15">
                                                        <span class="rating">9.0<small>/10</small> <strong>Rating average</strong></span>
                                                        <em>Published 11 Oct. 2019</em>
                                                    </div>
                                                    <h4>"Really great dinner!!"</h4>
                                                    <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.</p>
                                                    <ul>
                                                        <li><a href="#0"><i class="icon_like"></i><span>Useful</span></a></li>
                                                        <li><a href="#0"><i class="icon_dislike"></i><span>Not useful</span></a></li>
                                                        <li><a href="#0"><i class="arrow_back"></i> <span>Reply</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /row -->
                                            <div class="row reply">
                                                <div class="col-md-2 user_info">
                                                    <figure><img src="img/avatar.jpg" alt=""></figure>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="review_content">
                                                        <strong>Reply from Foogra</strong>
                                                        <em>Published 3 minutes ago</em>
                                                        <p><br>Hi Monika,<br><br>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.<br><br>Thanks</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /reply -->
                                        </div>
                                        <!-- /review_card -->
                                    </div>
                                    <!-- /reviews -->
                                    <div class="text-end"><a href="leave-review.html" class="btn_1">Leave a review</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /tab-content -->
                </div> --}}
                    <!-- /tabs_detail -->
                </div>
                <!-- /col -->

                <div class="col-lg-4" id="sidebar_fixed">
                    <div class="box_booking">
                        <div class="head">
                            <h3>Réservez votre table</h3>
                            {{-- <div class="offer">Up to -40% off</div> --}}
                        </div>
                        <div class="main">
                        <form method="post" action="{{ route('client.reservation.create') }}">
                            @csrf
                            {{-- <form method="post" action="{{ route('test') }}">
                            @csrf
                            <input type="date" name="date">
                            <input type="time" name="time">
                            <button type="sumbit" >ok</button>
                            </form> --}}
                            <!-- /head -->
                            <input type="hidden" name="client_id" value="{{ Auth::guard('client')->id() }}">

                                <div class="input-group mb-3">
                                    <span class="input-group-text">Date</span>
                                    <input class="form-control" type="date" name="reservation_date"
                                        min="{{ date('Y-m-d') }}">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text">Heure</span>
                                    <select class="form-select" name="reservation_time">
                                        <option value="" disabled selected>sélectionner</option>
                                        <optgroup label="Déjeuner">
                                            <option value="12:00:00">12:00 AM</option>
                                            <option value="12:30:00">12.30 AM</option>
                                            <option value="01:00:00">1.00 AM</option>
                                            <option value="01:30:00">1.30 AM</option>
                                        </optgroup>
                                        <optgroup label="Dîner">
                                            <option value="08:00:00">20.00 PM</option>
                                            <option value="08:30:00">20.30 PM</option>
                                            <option value="09:00:00">21.00 PM</option>
                                            <option value="09:30:00">21.30 PM</option>
                                        </optgroup>
                                    </select>
                                </div>

{{-- <input type="hidden" name="restaurant_id" value="{{ $restaurant->id }}"> --}}
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Combien de personnes?</span>
                                    <select class="form-control" id="number_of_people" name="table_id">
                                        <option value="" disabled selected>sélectionner</option>
                                        @foreach ($restaurant->tables as $table)
                                        @if ($table->status == 'Disponible')
                                                <option value="{{ $table->id }}">{{ $table->guest_number }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <button type="submit" class="btn_1 full-width mb_5">Réservez maintenant</button>
                        </form>
                        </div>
                        <!-- /dropdown -->

                    <!-- /dropdown -->
                    {{-- <a href="wishlist.html" class="btn_1 full-width outline wishlist"><i class="icon_heart"></i> Add to wishlist</a> --}}
                </div>
            </div>
            <!-- /box_booking -->
            {{-- <ul class="share-buttons">
                    <li><a class="fb-share" href="#0"><i class="social_facebook"></i> Share</a></li>
                    <li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Share</a></li>
                    <li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Share</a></li>
                </ul> --}}
        </div>

        </div>
        <!-- /row -->
        </div>
        <!-- /container -->

    </main>
@endsection
