<!-- main-sidebar -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar  sidebar-scroll bg-dark text-Light">
			<div class="main-sidebar-header active bg-dark">
				<a class="desktop-logo logo-light active" href="{{ url('/' . $page='index') }}"><h2 style="color=0FB4F7;">JH-SHOP</h2></a>
			</div>
			<div class="main-sidemenu ">
				<div class="app-sidebar__user clearfix">
					<div class="dropdown user-pro-body">
						<div class="">
							<img alt="user-img" class="avatar avatar-xl brround" src="{{URL::asset('assets/img/jihad.jpg')}}"><span class="avatar-status profile-status bg-green"></span>
						</div>
						<div class="user-info">
							<h4 class="font-weight-semibold text-white mt-3 mb-0">{{Auth::user()->name}}</h4>
							<span class="mb-0 text-muted">{{Auth::user()->email}}</span>
						</div>
					</div>
				</div>
				<ul class="side-menu">
					<li class="side-item side-item-category" style="color:#FFFFFF">Main</li>
					<li class="slide">
						<a class="side-menu__item" href="{{ url('/dashboard') }}"><span class="side-menu__label text-info" style="color:#F7F4F4">Home</span></a>
					</li>
					<li class="side-item side-item-category" style="color:#FFFFFF">General</li>
					
					
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide"><span class="side-menu__label text-info" style="color:#F7F4F4">Stock</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="{{url('/products')}}" style="color:#F7F4F4">Products</a></li>
							<li><a class="slide-item" href="{{'/add/product'}}" style="color:#F7F4F4">Add product</a></li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide"><span class="side-menu__label text-info" style="color:#F7F4F4">Orders</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="{{route('orders')}}" style="color:#F7F4F4">Orders</a></li>
							<li><a class="slide-item" href="{{route('customers')}}" style="color:#F7F4F4">Customers</a></li>
						</ul>
					</li>
					
				</ul>
			</div>
		</aside>
<!-- main-sidebar -->
