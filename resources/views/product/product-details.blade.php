@extends('layouts.master')
@section('css')
<!--Internal  Nice-select css  -->
<link href="{{URL::asset('assets/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet"/>
<!-- Internal Select2 css -->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Ecommerce</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Product-details</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<div class="modal fade" id="ajouter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<div class="modal-header">
						<h5 class="modal-title text-primary" id="exampleModalLabel">Edit product</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
						<form action="{{route('product.edit',$product->slug)}}" method="post">
							@method('PUT')
							<div class="modal-body">
							 
								@csrf
								<div >
									<div class="form-group text-primary">
										<label for="exampleInputEmail1">Title</label>
										<input type="text" class="form-control" name="title" value="{{$product->title}}">
									</div>
									<div class="mb-4">
										<p class="mg-b-10 text-primary">Category</p>
										<select name="category" class="form-control SlectBox" onclick="console.log($(this).val())" onchange="console.log('change is firing')">
											<!--placeholder-->
											<option  value="volvo">Volvo</option>
											<option  value="saab">Saab</option>
											<option  value="mercedes">Mercedes</option>
											<option  value="audi">Audi</option>
											<option  value="volvo">Volvo</option>
											<option  value="saab">Saab</option>
											<option  value="mercedes">Mercedes</option>
											<option  value="audi">Audi</option>
										</select>
									</div>
									
									
									<div class="card">
										<div class="card-body">
											<div>
												<h6 class="card-title text-primary p-2">product image</h6>
											</div>
											
											<div class="mb-3">
												<input class="form-control" type="file" name="image">
											</div>
									
										</div>
									</div>

									<div class="form-group">
										<p class="mg-b-10 text-primary">Description</p>
										<textarea class="form-control text-dark" name="description" placeholder="{{$product->description}}" rows="3"></textarea>
									</div>
									<div class="form-group text-primary">
										<label for="exampleInputEmail1">Price</label>
										<input type="number" class="form-control" name="price" value="{{$product->price}}" >
									</div>
									<div class="form-group text-primary">
										<label for="exampleInputEmail1">oldPrice</label>
										<input type="number" class="form-control" name="oldPrice" value="{{$product->oldPrice}}">
									</div>
									<div class="form-group text-primary">
										<label for="exampleInputEmail1">quantity</label>
										<input type="number" class="form-control" name="quantity" value="{{$product->quantity}}">
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" name="save" class="btn btn-primary">Save</button>
							</div>
						</form>
					</div>
				</div>
				</div>
				<!-- row -->
				@if(session()->has('success'))
							<div class="alert alert-success">
									{{session()->get('success')}}
								</div>
							@endif
				<div class="row row-sm">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body h-100">
								<div class="row row-sm ">
									<div class=" col-xl-5 col-lg-12 col-md-12">
										<div class="preview-pic tab-content">
										  <div class="tab-pane active" id="pic-1"><img src="{{URL::asset('assets/img/ecommerce/shirt-5.png')}}" alt="image"/></div>
										  
										</div>
									</div>
									<div class="details col-xl-7 col-lg-12 col-md-12 mt-4 mt-xl-0">
										<h4 class="product-title mb-1">{{$product->title}}</h4>
										<p class="text-muted tx-13 mb-1">Category : {{$product->category}}</p>
										
										<h6 class="price">current price: <span class="h3 ml-2 text-success">$ {{$product->price}}</span></h6>
										<p class="product-description">{{$product->description}}</p>
										
										<div class="sizes d-flex">sizes:
											<span class="size d-flex"  data-toggle="tooltip" title="small"><label class="rdiobox mb-0"><input checked="" name="rdio" type="radio"> <span class="font-weight-bold">s</span></label></span>
											<span class="size d-flex"  data-toggle="tooltip" title="medium"><label class="rdiobox mb-0"><input name="rdio" type="radio"> <span>m</span></label></span>
											<span class="size d-flex"  data-toggle="tooltip" title="large"><label class="rdiobox mb-0"><input name="rdio" type="radio"> <span>l</span></label></span>
											<span class="size d-flex"  data-toggle="tooltip" title="extra-large"><label class="rdiobox mb-0"><input name="rdio" type="radio"> <span>xl</span></label></span>
										</div>
										<div class="colors d-flex mr-3 mt-2">
											<span class="mt-2">colors:</span>
											<div class="row gutters-xs mr-4">
												<div class="mr-2">
													<label class="colorinput">
														<input name="color" type="radio" value="azure" class="colorinput-input" checked="">
														<span class="colorinput-color bg-danger"></span>
													</label>
												</div>
												<div class="mr-2">
													<label class="colorinput">
														<input name="color" type="radio" value="indigo" class="colorinput-input">
														<span class="colorinput-color bg-secondary"></span>
													</label>
												</div>
												<div class="mr-2">
													<label class="colorinput">
														<input name="color" type="radio" value="purple" class="colorinput-input">
														<span class="colorinput-color bg-dark"></span>
													</label>
												</div>
												<div class="mr-2">
													<label class="colorinput">
														<input name="color" type="radio" value="pink" class="colorinput-input">
														<span class="colorinput-color bg-pink"></span>
													</label>
												</div>
												
											</div>
											
										</div>
										<div class="d-flex mt-4">
												<h5 class="mt-2 product-title">Quantity: <span>  {{$product->quantity}}</span></h5>
											</div>
										<div class="action">
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ajouter">
											Edit Product
										</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->
				<!-- row -->
				<div class="row row-sm">
					<div class="col-md-12 col-xl-4 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="feature2">
									<i class="mdi mdi-airplane-takeoff bg-purple ht-50 wd-50 text-center brround text-white"></i>
								</div>
								<h5 class="mb-2 tx-16">Free Shipping</h5>
								<span class="fs-14 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua domenus orioneu.</span>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-xl-4 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="feature2">
									<i class="mdi mdi-headset bg-pink  ht-50 wd-50 text-center brround text-white"></i>
								</div>
								<h5 class="mb-2 tx-16">Customer Support</h5>
								<span class="fs-14 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua domenus orioneu.</span>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-xl-4 col-xs-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="feature2">
									<i class="mdi mdi-refresh bg-teal ht-50 wd-50 text-center brround text-white"></i>
								</div>
								<div class="icon-return"></div>
								<h5 class="mb-2  tx-16">30 days money back</h5>
								<span class="fs-14 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua domenus orioneu.</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Select2.min js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
<!-- Internal Nice-select js-->
<script src="{{URL::asset('assets/plugins/jquery-nice-select/js/jquery.nice-select.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-nice-select/js/nice-select.js')}}"></script>
@endsection