@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Ecommerce</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ add-product</span>
						</div>
					</div>
					
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
                    
                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
						<div class="card  box-shadow-0 bg-dark p-3">
							@if ($errors->any())
								<div class="alert alert-danger">
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif
							@if(session()->has('success'))
							<div class="alert alert-success">
									{{session()->get('success')}}
								</div>
							@endif
							<div class="card-body pt-0">
								<form action="{{route('store')}}" method="post"  enctype="multipart/form-data">
									@csrf
									<div >
										<div class="form-group text-white">
											<label for="exampleInputEmail1">Title</label>
											<input type="text" class="form-control" name="title" placeholder="Enter title">
										</div>
                                        <div class="mb-4">
                                            <p class="mg-b-10 text-white">Category</p>
                                            <select name="category" class="form-control SlectBox" onclick="console.log($(this).val())" onchange="console.log('change is firing')">
                                                <!--placeholder-->
                                                <option  value="Computer">Computer</option>
                                                <option  value="Home">Home</option>
                                                <option  value="mercedes">Bags & Shoes</option>
												<option  value="Phones">Phones</option>
                                                <option  value="audi">Men's Fashion</option>
                                                <option  value="Women's Fashion">Women's Fashion</option>
                                               
                                            </select>
								        </div>
                                        
										
                                        <div class="card">
                                            <div class="card-body">
                                                <div>
                                                    <h6 class="card-title  p-2">product image</h6>
                                                </div>
                                                
                                                <div class="mb-3">
													<input class="form-control" type="file" name="image">
												</div>
                                        
                                            </div>
						                </div>

                                        <div class="form-group">
                                            <p class="mg-b-10 text-white">Description</p>
                                            <textarea class="form-control" name="description" placeholder="product descrition" rows="3"></textarea>
                                        </div>
                                        <div class="form-group text-white">
											<label for="exampleInputEmail1">Price</label>
											<input type="number" class="form-control" name="price" placeholder="product price">
										</div>
										<div class="form-group text-white">
											<label for="exampleInputEmail1">oldPrice</label>
											<input type="number" class="form-control" name="oldPrice" placeholder="product oldprice">
										</div>
										<div class="form-group text-white">
											<label for="exampleInputEmail1">quantity</label>
											<input type="number" class="form-control" name="quantity" placeholder="quantity of product ">
										</div>
									</div>

                                    <div>
                                        <button type="submit" class="btn btn-primary mt-3 mb-0">add product</button>
                                    </div>
									
								</form>
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