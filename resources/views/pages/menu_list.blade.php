@include('layouts.Header')

        @include('layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 591px;">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Menu List</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Menu</li>
								<li class="breadcrumb-item active" aria-current="page">Menu list</li>
							</ol>
						</nav>
					</div>
				</div>				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xxxl-3 col-xl-4 col-lg-6 col-12">
					<div class="box food-box">
						<div class="box-body text-center">
						  <div class="menu-item"><img src="{{ asset('import/assets/images/food/dish-1.png') }}" class="img-fluid w-p75" alt=""></div>
						  <div class="menu-details text-center">
							  <h4 class="mt-20 mb-10">Kung Pao Tofu Recipe</h4>
							  <p>Food/Noodle</p>
						  </div>
						  <div class="act-btn d-flex justify-content-between">
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-success-light btn-xs mb-5"><i class="fa fa-eye-slash"></i></a>
								  <small class="d-block">View</small>
							  </div>
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-danger-light btn-xs mb-5"><i class="fa fa-edit"></i></a>
								  <small class="d-block">Edit</small>
							  </div>
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-xs mb-5"><i class="fa fa-trash"></i></a>
								  <small class="d-block">Delete</small>
							  </div>
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-info-light btn-xs mb-5"><i class="far fa-plus-square"></i></a>
								  <small class="d-block">Duplicate</small>
							  </div>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-xxxl-3 col-xl-4 col-lg-6 col-12">
					<div class="box food-box">
						<div class="box-body text-center">
						  <div class="menu-item"><img src="{{ asset('import/assets/images/food/dish-2.png') }}" class="img-fluid w-p75" alt=""></div>
						  <div class="menu-details text-center">
							  <h4 class="mt-20 mb-10">Pan Seared Salmon </h4>
							  <p>Food/Noodle</p>
						  </div>
						  <div class="act-btn d-flex justify-content-between">
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-success-light btn-xs mb-5"><i class="fa fa-eye-slash"></i></a>
								  <small class="d-block">View</small>
							  </div>
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-danger-light btn-xs mb-5"><i class="fa fa-edit"></i></a>
								  <small class="d-block">Edit</small>
							  </div>
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-xs mb-5"><i class="fa fa-trash"></i></a>
								  <small class="d-block">Delete</small>
							  </div>
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-info-light btn-xs mb-5"><i class="far fa-plus-square"></i></a>
								  <small class="d-block">Duplicate</small>
							  </div>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-xxxl-3 col-xl-4 col-lg-6 col-12">
					<div class="box food-box">
						<div class="box-body text-center">
						  <div class="menu-item"><img src="{{ asset('import/assets/images/food/dish-3.png') }}" class="img-fluid w-p75" alt=""></div>
						  <div class="menu-details text-center">
							  <h4 class="mt-20 mb-10">Dal Palak Recipe </h4>
							  <p>Food/Noodle</p>
						  </div>
						  <div class="act-btn d-flex justify-content-between">
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-success-light btn-xs mb-5"><i class="fa fa-eye-slash"></i></a>
								  <small class="d-block">View</small>
							  </div>
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-danger-light btn-xs mb-5"><i class="fa fa-edit"></i></a>
								  <small class="d-block">Edit</small>
							  </div>
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-xs mb-5"><i class="fa fa-trash"></i></a>
								  <small class="d-block">Delete</small>
							  </div>
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-info-light btn-xs mb-5"><i class="far fa-plus-square"></i></a>
								  <small class="d-block">Duplicate</small>
							  </div>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-xxxl-3 col-xl-4 col-lg-6 col-12">
					<div class="box food-box">
						<div class="box-body text-center">
						  <div class="menu-item"><img src="{{ asset('import/assets/images/food/dish-4.png') }}" class="img-fluid w-p75" alt=""></div>
						  <div class="menu-details text-center">
							  <h4 class="mt-20 mb-10">Vegetable Jalfrezi</h4>
							  <p>Food/Noodle</p>
						  </div>
						  <div class="act-btn d-flex justify-content-between">
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-success-light btn-xs mb-5"><i class="fa fa-eye-slash"></i></a>
								  <small class="d-block">View</small>
							  </div>
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-danger-light btn-xs mb-5"><i class="fa fa-edit"></i></a>
								  <small class="d-block">Edit</small>
							  </div>
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-xs mb-5"><i class="fa fa-trash"></i></a>
								  <small class="d-block">Delete</small>
							  </div>
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-info-light btn-xs mb-5"><i class="far fa-plus-square"></i></a>
								  <small class="d-block">Duplicate</small>
							  </div>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-xxxl-3 col-xl-4 col-lg-6 col-12">
					<div class="box food-box">
						<div class="box-body text-center">
						  <div class="menu-item"><img src="{{ asset('import/assets/images/food/dish-5.png') }}" class="img-fluid w-p75" alt=""></div>
						  <div class="menu-details text-center">
							  <h4 class="mt-20 mb-10">Palak Paneer Bhurji </h4>
							  <p>Food/Noodle</p>
						  </div>
						  <div class="act-btn d-flex justify-content-between">
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-success-light btn-xs mb-5"><i class="fa fa-eye-slash"></i></a>
								  <small class="d-block">View</small>
							  </div>
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-danger-light btn-xs mb-5"><i class="fa fa-edit"></i></a>
								  <small class="d-block">Edit</small>
							  </div>
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-xs mb-5"><i class="fa fa-trash"></i></a>
								  <small class="d-block">Delete</small>
							  </div>
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-info-light btn-xs mb-5"><i class="far fa-plus-square"></i></a>
								  <small class="d-block">Duplicate</small>
							  </div>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-xxxl-3 col-xl-4 col-lg-6 col-12">
					<div class="box food-box">
						<div class="box-body text-center">
						  <div class="menu-item"><img src="{{ asset('import/assets/images/food/dish-6.png') }}" class="img-fluid w-p75" alt=""></div>
						  <div class="menu-details text-center">
							  <h4 class="mt-20 mb-10">Kadai Paneer Gravy</h4>
							  <p>Food/Noodle</p>
						  </div>
						  <div class="act-btn d-flex justify-content-between">
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-success-light btn-xs mb-5"><i class="fa fa-eye-slash"></i></a>
								  <small class="d-block">View</small>
							  </div>
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-danger-light btn-xs mb-5"><i class="fa fa-edit"></i></a>
								  <small class="d-block">Edit</small>
							  </div>
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-xs mb-5"><i class="fa fa-trash"></i></a>
								  <small class="d-block">Delete</small>
							  </div>
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-info-light btn-xs mb-5"><i class="far fa-plus-square"></i></a>
								  <small class="d-block">Duplicate</small>
							  </div>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-xxxl-3 col-xl-4 col-lg-6 col-12">
					<div class="box food-box">
						<div class="box-body text-center">
						  <div class="menu-item"><img src="{{ asset('import/assets/images/food/dish-1.png') }}" class="img-fluid w-p75" alt=""></div>
						  <div class="menu-details text-center">
							  <h4 class="mt-20 mb-10">Gajar Matar Recipe</h4>
							  <p>Food/Noodle</p>
						  </div>
						  <div class="act-btn d-flex justify-content-between">
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-success-light btn-xs mb-5"><i class="fa fa-eye-slash"></i></a>
								  <small class="d-block">View</small>
							  </div>
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-danger-light btn-xs mb-5"><i class="fa fa-edit"></i></a>
								  <small class="d-block">Edit</small>
							  </div>
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-xs mb-5"><i class="fa fa-trash"></i></a>
								  <small class="d-block">Delete</small>
							  </div>
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-info-light btn-xs mb-5"><i class="far fa-plus-square"></i></a>
								  <small class="d-block">Duplicate</small>
							  </div>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-xxxl-3 col-xl-4 col-lg-6 col-12">
					<div class="box food-box">
						<div class="box-body text-center">
						  <div class="menu-item"><img src="{{ asset('import/assets/images/food/dish-2.png') }}" class="img-fluid w-p75" alt=""></div>
						  <div class="menu-details text-center">
							  <h4 class="mt-20 mb-10">Aloo Tamatar Ki Sabzi </h4>
							  <p>Food/Noodle</p>
						  </div>
						  <div class="act-btn d-flex justify-content-between">
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-success-light btn-xs mb-5"><i class="fa fa-eye-slash"></i></a>
								  <small class="d-block">View</small>
							  </div>
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-danger-light btn-xs mb-5"><i class="fa fa-edit"></i></a>
								  <small class="d-block">Edit</small>
							  </div>
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-xs mb-5"><i class="fa fa-trash"></i></a>
								  <small class="d-block">Delete</small>
							  </div>
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-info-light btn-xs mb-5"><i class="far fa-plus-square"></i></a>
								  <small class="d-block">Duplicate</small>
							  </div>
						  </div>
						</div>
					</div>
				</div>
				<div class="col-xxxl-3 d-xxxl-none d-xl-block d-lg-none col-xl-4 col-lg-6 col-12">
					<div class="box food-box">
						<div class="box-body text-center">
						  <div class="menu-item"><img src="{{ asset('import/assets/images/food/dish-3.png') }}" class="img-fluid w-p75" alt=""></div>
						  <div class="menu-details text-center">
							  <h4 class="mt-20 mb-10">Vegan Thai Basil</h4>
							  <p>Food/Noodle</p>
						  </div>
						  <div class="act-btn d-flex justify-content-between">
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-success-light btn-xs mb-5"><i class="fa fa-eye-slash"></i></a>
								  <small class="d-block">View</small>
							  </div>
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-danger-light btn-xs mb-5"><i class="fa fa-edit"></i></a>
								  <small class="d-block">Edit</small>
							  </div>
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-xs mb-5"><i class="fa fa-trash"></i></a>
								  <small class="d-block">Delete</small>
							  </div>
							  <div class="text-center mx-5">
								  <a href="#" class="waves-effect waves-circle btn btn-circle btn-info-light btn-xs mb-5"><i class="far fa-plus-square"></i></a>
								  <small class="d-block">Duplicate</small>
							  </div>
						  </div>
						</div>
					</div>
				</div>
		    </div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
        <!-- /.content-wrapper -->

        <!-- Content Right Sidebar -->
        @include('layouts.rightbar')
        <!-- /.Content Right Sidebar -->

        @include('layouts.Footer')
</body>

</html>