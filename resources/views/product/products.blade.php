@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Ecommerce</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ products</span>
						</div>
					</div>
					
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				
				<div class="row row-sm">
					<div class="col-xl-3 col-lg-3 col-md-12 mb-3 mb-md-0">
						<div class="card">
							<div class="card-header border-bottom pt-3 pb-3 mb-0 font-weight-bold text-uppercase">Category</div>
							<div class="card-body pb-0">
								<div class="form-group">
									<label class="form-label">Mens</label>
									<select name="beast" id="select-beast" class="form-control  nice-select  custom-select">
										<option value="0">--Select--</option>
										<option value="1">Foot wear</option>
										<option value="2">Top wear</option>
										<option value="3">Bootom wear</option>
										<option value="4">Men's Groming</option>
										<option value="5">Accessories</option>
									</select>
								</div>
								<div class="form-group mt-2">
									<label class="form-label">Women</label>
									<select name="beast" id="select-beast1" class="form-control  nice-select  custom-select">
										<option value="0">--Select--</option>
										<option value="1">Western wear</option>
										<option value="2">Foot wear</option>
										<option value="3">Top wear</option>
										<option value="4">Bootom wear</option>
										<option value="5">Beuty Groming</option>
										<option value="6">Accessories</option>
										<option value="7">jewellery</option>
									</select>
								</div>
								<div class="form-group mt-2">
									<label class="form-label">Baby & Kids</label>
									<select name="beast" id="select-beast2" class="form-control  nice-select  custom-select">
										<option value="0">--Select--</option>
										<option value="1">Boys clothing</option>
										<option value="2">girls Clothing</option>
										<option value="3">Toys</option>
										<option value="4">Baby Care</option>
										<option value="5">Kids footwear</option>
									</select>
								</div>
								<div class="form-group mt-2">
									<label class="form-label">Electronics</label>
									<select name="beast" id="select-beast3" class="form-control  nice-select  custom-select">
										<option value="0">--Select--</option>
										<option value="1">Mobiles</option>
										<option value="2">Laptops</option>
										<option value="3">Gaming & Accessories</option>
										<option value="4">Health care Appliances</option>
									</select>
								</div>
								
							</div>
							
							
						</div>
					</div>
					<div class="col-xl-9 col-lg-9 col-md-12">
						<div class="card bg-dark">
							<div class="card-body p-2">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search ...">
									<span class="input-group-append">
										<button class="btn btn-primary" type="button">Search</button>
									</span>
								</div>
							</div>
						</div>
						@if(session()->has('delet'))
								<div class="alert alert-success">
									{{session()->get('delet')}}
								</div>
							@endif
							@if(session()->has('success'))
								<div class="alert alert-success">
										{{session()->get('success')}}
									</div>
							@endif
						<div class="row row-sm ">
							
							
							@foreach($products as $product)
								<div class="col-md-6 col-lg-6 col-xl-4  col-sm-6">
									<div class="card bg-dark">
										<div class="card-body">
											@csrf
											<div class="pro-img-box">
												<img class="w-100" src="{{URL::asset('./uploads/'.$product->image)}}" alt="product-image">
												<a href="#" class="adtocart"> <i class="las la-shopping-cart "></i></a>
											</div>
											<div class="text-center pt-3">
												<h3 class="h6 mb-2 mt-4 text-light font-weight-bold text-uppercase">{{$product->title}}</h3>
												<h4 class="h5 mb-0 mt-2 text-center font-weight-bold text-success">{{$product->price}} <span class="text-danger font-weight-normal tx-13 ml-1 prev-price">{{$product->oldPrice}}</span></h4>
											</div>
											<div>
												<a name="" id="" class="btn btn-primary" href="{{route('product.show',$product->slug)}}" role="button">show</a>
											</div>
										</div>
									</div>
								</div>
							@endforeach
							
						</div>
						<div class="d-flex justify-content-center">
							{{$products->links()}}
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