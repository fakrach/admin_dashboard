@extends('layouts.master')
@section('css')
@endsection

@section('content')
				<!-- row -->
				<div class="row row-sm mt-3">
					<div class="col-lg-4">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="pl-0">
									<div class="main-profile-overview">
										<div class="main-img-user profile-user">
											<img alt="" src="{{URL::asset('assets/img/faces/6.jpg')}}">
										</div>
										<div class="d-flex justify-content-between mg-b-20">
											<div>
												<h5 class="main-profile-name">{{Auth::user()->name}}</h5>
												<p class="main-profile-name-text">{{Auth::user()->emial}}</p>
											</div>
										</div>
										<label class="main-content-label tx-13 mg-b-20">Post</label>
										<h5 class="text-primary m-b-5 tx-14">{{Auth::user()->poste}}</h5>
										
										<hr class="mg-y-30">
										<label class="main-content-label tx-13 mg-b-20">Social</label>
										<div class="main-profile-social-list">
											
											<div class="media">
												<div class="media-icon bg-success-transparent text-success">
													<i class="icon ion-logo-twitter"></i>
												</div>
												<div class="media-body">
													<span>Twitter</span> <a href="">twitter.com</a>
												</div>
											</div>
											<div class="media">
												<div class="media-icon bg-info-transparent text-info">
													<i class="icon ion-logo-linkedin"></i>
												</div>
												<div class="media-body">
													<span>Linkedin</span> <a href="">linkedin.com/</a>
												</div>
											</div>
											
										</div>
										
										<!--skill bar-->
									</div><!-- main-profile-overview -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-8">
						
						<div class="card">
							<div class="card-body">
								<div class="tabs-menu ">
									<!-- Tabs -->
									<ul class="nav nav-tabs profile navtab-custom panel-tabs">
										<li class="active">
											<a href="#home" data-toggle="tab" aria-expanded="true"> <span class="visible-xs"><i class="las la-user-circle tx-16 mr-1"></i></span> <span class="hidden-xs">ABOUT ME</span> </a>
										</li>
										
										<li class="">
											<a href="#settings" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="las la-cog tx-16 mr-1"></i></span> <span class="hidden-xs">SETTINGS</span> </a>
										</li>
									</ul>
								</div>
								<div class="tab-content border-left border-bottom border-right border-top-0 p-4">
									<div class="tab-pane active" id="home">
										<h4 class="tx-15 text-uppercase mb-3">BIOdata</h4>
										<p class="m-b-5">{{Auth::user()->bio}}</p>
										<div class="m-t-30">
											<h4 class="tx-15 text-uppercase mt-3">Experience</h4>
											<div class=" p-t-10">
												<h5 class="text-primary m-b-5 tx-14">{{Auth::user()->poste}}</h5>
												<p class="text-muted tx-13 m-b-0">{{Auth::user()->experience}}</p>
											</div>
											
											
										</div>
									</div>
									
									<div class="tab-pane" id="settings">
										<form methode="post">
											<div class="form-group">
												<label for="FullName">Full Name</label>
												<input type="text" placeholder="{{Auth::user()->name}}" id="FullName" class="form-control">
											</div>
											<div class="form-group">
												<label for="Email">Email</label>
												<input type="email" placeholder="{{Auth::user()->email}}" id="Email" class="form-control">
											</div>
											
											<div class="form-group">
												<label for="Password">Password</label>
												<input type="password" placeholder="6 - 15 Characters" id="Password" class="form-control">
											</div>
											<div class="form-group">
												<label for="RePassword">Re-Password</label>
												<input type="password" placeholder="6 - 15 Characters" id="RePassword" class="form-control">
											</div>
											<div class="form-group">
												<label for="AboutMe">About Me</label>
												<textarea id="AboutMe" class="form-control">{{Auth::user()->bio}}</textarea>
											</div>
											<button class="btn btn-primary waves-effect waves-light w-md" type="submit">Save</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@endsection