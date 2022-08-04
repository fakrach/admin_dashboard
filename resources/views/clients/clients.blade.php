@extends('layouts.master')
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Orders</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Orders Table</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row opened -->
				<div class="row row-sm">

					<!--div-->
					<div class="col-xl-12">
						<div class="card mg-b-20">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">Orders Table</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example" class="table key-buttons text-md-nowrap">
										<thead>
											<tr>
												<th class="border-bottom-0">Name</th>
												<th class="border-bottom-0">Position</th>
												<th class="border-bottom-0">Office</th>
												<th class="border-bottom-0">Age</th>
												<th class="border-bottom-0">Start date</th>
												<th class="border-bottom-0">Salary</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Tiger Nixon</td>
												<td>System Architect</td>
												<td>Edinburgh</td>
												<td>61</td>
												<td>2011/04/25</td>
												<td>$320,800</td>
											</tr>
											
											<tr>
												<td>Ashton Cox</td>
												<td>Junior Technical Author</td>
												<td>San Francisco</td>
												<td>66</td>
												<td>2009/01/12</td>
												<td>$86,000</td>
											</tr>
											<tr>
												<td>Cedric Kelly</td>
												<td>Senior Javascript Developer</td>
												<td>Edinburgh</td>
												<td>22</td>
												<td>2012/03/29</td>
												<td>$433,060</td>
											</tr>
											
											<tr>
												<td>Brielle Williamson</td>
												<td>Integration Specialist</td>
												<td>New York</td>
												<td>61</td>
												<td>2012/12/02</td>
												<td>$372,000</td>
											</tr>
											<tr>
												<td>Herrod Chandler</td>
												<td>Sales Assistant</td>
												<td>San Francisco</td>
												<td>59</td>
												<td>2012/08/06</td>
												<td>$137,500</td>
											</tr>
											<tr>
												<td>Rhona Davidson</td>
												<td>Integration Specialist</td>
												<td>Tokyo</td>
												<td>55</td>
												<td>2010/10/14</td>
												<td>$327,900</td>
											</tr>
											<tr>
												<td>Colleen Hurst</td>
												<td>Javascript Developer</td>
												<td>San Francisco</td>
												<td>39</td>
												<td>2009/09/15</td>
												<td>$205,500</td>
											</tr>
											<tr>
												<td>Sonya Frost</td>
												<td>Software Engineer</td>
												<td>Edinburgh</td>
												<td>23</td>
												<td>2008/12/13</td>
												<td>$103,600</td>
											</tr>
											<tr>
												<td>Jena Gaines</td>
												<td>Office Manager</td>
												<td>London</td>
												<td>30</td>
												<td>2008/12/19</td>
												<td>$90,560</td>
											</tr>
											<tr>
												<td>Quinn Flynn</td>
												<td>Support Lead</td>
												<td>Edinburgh</td>
												<td>22</td>
												<td>2013/03/03</td>
												<td>$342,000</td>
											</tr>
											<tr>
												<td>Charde Marshall</td>
												<td>Regional Director</td>
												<td>San Francisco</td>
												<td>36</td>
												<td>2008/10/16</td>
												<td>$470,600</td>
											</tr>
											<tr>
												<td>Haley Kennedy</td>
												<td>Senior Marketing Designer</td>
												<td>London</td>
												<td>43</td>
												<td>2012/12/18</td>
												<td>$313,500</td>
											</tr>
											<tr>
												<td>Tatyana Fitzpatrick</td>
												<td>Regional Director</td>
												<td>London</td>
												<td>19</td>
												<td>2010/03/17</td>
												<td>$385,750</td>
											</tr>
											<tr>
												<td>Michael Silva</td>
												<td>Marketing Designer</td>
												<td>London</td>
												<td>66</td>
												<td>2012/11/27</td>
												<td>$198,500</td>
											</tr>
											<tr>
												<td>Paul Byrd</td>
												<td>Chief Financial Officer (CFO)</td>
												<td>New York</td>
												<td>64</td>
												<td>2010/06/09</td>
												<td>$725,000</td>
											</tr>
											<tr>
												<td>Gloria Little</td>
												<td>Systems Administrator</td>
												<td>New York</td>
												<td>59</td>
												<td>2009/04/10</td>
												<td>$237,500</td>
											</tr>
											<tr>
												<td>Bradley Greer</td>
												<td>Software Engineer</td>
												<td>London</td>
												<td>41</td>
												<td>2012/10/13</td>
												<td>$132,000</td>
											</tr>
											<tr>
												<td>Dai Rios</td>
												<td>Personnel Lead</td>
												<td>Edinburgh</td>
												<td>35</td>
												<td>2012/09/26</td>
												<td>$217,500</td>
											</tr>
											<tr>
												<td>Jenette Caldwell</td>
												<td>Development Lead</td>
												<td>New York</td>
												<td>30</td>
												<td>2011/09/03</td>
												<td>$345,000</td>
											</tr>
											
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					
				</div>
				<!-- /row -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
@endsection