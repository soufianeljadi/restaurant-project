@extends('client.client_master')
@section('client')

<div class="content container-fluid">
    <div class="row">

        <section id="gtco-reservation" class="bg-fixed bg-white section-padding overlay"
            style="background-image: url(img/reservation-bg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="section-content bg-white p-5 shadow">
                            <div class="heading-section text-center">
                                <span class="subheading">
                                    Reservation
                                </span>
                                <h2>
                                    Reserve maintenant
                                </h2>
                            </div>
                            <form method="post" name="contact-us" action="">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Name">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" id="email" name="email"
                                            placeholder="Email">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="number" class="form-control" id="phoneNumber"
                                            name="phoneNumber" placeholder="Phone">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="input-group date" id="datetimepicker4"
                                            data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input"
                                                data-target="#datetimepicker4" placeholder="Date" />
                                            <div class="input-group-append" data-target="#datetimepicker4"
                                                data-toggle="datetimepicker">
                                                <div class="input-group-text">
                                                    <span class="lnr lnr-calendar-full"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <div class="input-group date" id="datetimepicker3"
                                            data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input"
                                                data-target="#datetimepicker3" placeholder="Time" />
                                            <div class="input-group-append" data-target="#datetimepicker3"
                                                data-toggle="datetimepicker">
                                                <div class="input-group-text">
                                                    <span class="lnr lnr-clock"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 form-group">
                                        <select class="form-control" id="selectPerson">
                                            <option></option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12 form-group">
                                        <textarea class="form-control" id="message" name="message" rows="6" placeholder="Your Message ..."></textarea>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button class="btn btn-primary btn-shadow btn-lg" type="submit"
                                            name="submit">Reserve</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End of Reservation Section -->
    </div>
    <!-- External JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="vendor/bootstrap/popper.min.js"></script>
    <script src="vendor/bootstrap/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js "></script>
    <script src="vendor/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js"></script>
    <script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js">
    </script>

    <!-- Main JS -->
    <script src="js/app.min.js "></script>
</body>

</html>
