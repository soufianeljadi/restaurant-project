@extends('client.client_master')
@section('client')

        <!-- Page Wrapper -->

            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Mon profil</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('client.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Mon profil</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-header">
                            <div class="row align-items-center">
                                <div class="col-auto profile-image">
                                    <a href="#">
                                        <img class="rounded-circle" alt="User Image"
                                            src="{{ asset('img/client_user.png') }}">
                                    </a>
                                </div>
                                <div class="col ms-md-n2 profile-user-info">
                                    <h2 class="user-name mb-0">{{ Auth::guard('client')->user()->name }}</h2><br>
                                    <h6 class="text-muted">{{ Auth::guard('client')->user()->email }}</h6>

                                </div>
                                <div class="col-auto profile-btn">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="profile-menu">
								<ul class="nav nav-tabs nav-tabs-solid">
									<li class="nav-item">
										<a class="nav-link active" data-bs-toggle="tab" href="#per_details_tab">About</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#password_tab">Password</a>
									</li>
								</ul>
							</div> --}}
                        <div class="tab-content profile-tab-cont">

                            <!-- Personal Details Tab -->
                            <div class="tab-pane fade show active" id="per_details_tab">

                                <!-- Personal Details -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title d-flex justify-content-between">
                                                    <span>Détails du client</span>
                                                    <a class="edit-link" data-bs-toggle="modal"
                                                    href="#edit_client_{{ Auth::guard('client')->user()->id }}""><i
                                                            class="fa fa-edit me-1"></i>Modifier</a>
                                                </h5>
                                                <div class="row">
                                                    <p class="col-sm-2 text-muted mb-0 mb-sm-3">Nom du client</p>
                                                    <p class="col-sm-10">{{ Auth::guard('client')->user()->name }}</p>
                                                </div>
                                                {{-- <div class="row">
														<p class="col-sm-2 text-muted mb-0 mb-sm-3">Date of Birth</p>
														<p class="col-sm-10">24 Jul 1983</p>
													</div> --}}
                                                <div class="row">
                                                    <p class="col-sm-2 text-muted mb-0 mb-sm-3">Email ID</p>
                                                    <p class="col-sm-10">{{ Auth::guard('client')->user()->email }}</p>
                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                </div>
                                <!-- /Personal Details -->

                            </div>
                            <!-- /Personal Details Tab -->

                            {{-- <!-- Change Password Tab -->
								<div id="password_tab" class="tab-pane fade">

									<div class="card">
										<div class="card-body">
											<h5 class="card-title">Change Password</h5>
											<div class="row">
												<div class="col-md-10 col-lg-6">
													<form>
														<div class="form-group">
															<label>Old Password</label>
															<input type="password" class="form-control">
														</div>
														<div class="form-group">
															<label>New Password</label>
															<input type="password" class="form-control">
														</div>
														<div class="form-group">
															<label>Confirm Password</label>
															<input type="password" class="form-control">
														</div>
														<button class="btn btn-primary" type="submit">Save Changes</button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div> --}}
                            <!-- /Change Password Tab -->

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->

    <!-- Edit Details Modal -->
    <!-- Edit Details Modal -->
    <div class="modal fade" id="edit_client_{{ Auth::guard('client')->user()->id }}" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modifier client</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="{{ route('client.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ Auth::guard('client')->user()->id }}">
                        <div class="row form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Nom du client</label>
                                    <input type="text" class="form-control" name="name"
                                        value="{{ Auth::guard('client')->user()->name }}">
                                </div>
                            </div>
                            <div class="col-12 ">
                                <div class="form-group">
                                    <label>Email ID</label>
                                    <input type="email" class="form-control" name="email"
                                        value="{{ Auth::guard('client')->user()->email }}">
                                </div>
                            </div>


                        </div>
                        <button type="submit" class="btn btn-primary btn-block w-100">Sauvegarder les
                            modifications</button>
                    </form>
                </div>
            </div>
        </div>
    <!-- /Edit Details Modal -->

@endsection