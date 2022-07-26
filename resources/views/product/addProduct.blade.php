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
							<div class="card-body pt-0">
								<form >
									<div >
										<div class="form-group text-white">
											<label for="exampleInputEmail1">Title</label>
											<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
										</div>
                                        <div class="mb-4">
                                            <p class="mg-b-10 text-white">Category</p>
                                            <select name="somename" class="form-control SlectBox" onclick="console.log($(this).val())" onchange="console.log('change is firing')">
                                                <!--placeholder-->
                                                <option title="Volvo is a car"  value="volvo">Volvo</option>
                                                <option value="saab">Saab</option>
                                                <option value="mercedes">Mercedes</option>
                                                <option value="audi">Audi</option>
                                                <option title="Volvo is a car"  value="volvo">Volvo</option>
                                                <option value="saab">Saab</option>
                                                <option value="mercedes">Mercedes</option>
                                                <option value="audi">Audi</option>
                                            </select>
								        </div>
                                        
										
                                        <div class="card">
                                            <div class="card-body">
                                                <div>
                                                    <h6 class="card-title  p-2">product image</h6>
                                                </div>
                                                
                                                <div class="col-sm-12 col-md-4 mg-t-10 mg-sm-t-0">
                                                        <input type="file" class="dropify" data-default-file="{{URL::asset('assets/img/1 (2).jpg')}}" data-height="200"  />
                                                </div>
                                        
                                            </div>
						                </div>

                                        <div class="form-group">
                                            <p class="mg-b-10 text-white">Description</p>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="product descrition" rows="3"></textarea>
                                        </div>
                                        <div class="form-group text-white">
											<label for="exampleInputEmail1">Price</label>
											<input type="number" class="form-control" id="exampleInputEmail1" placeholder="product price">
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