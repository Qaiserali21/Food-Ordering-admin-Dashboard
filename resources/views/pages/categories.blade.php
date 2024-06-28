@include('layouts.Header')

        @include('layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Menu Categories</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Menu</li>
								<li class="breadcrumb-item active" aria-current="page">Menu Categories</li>
							</ol>
						</nav>
					</div>
				</div>				
			</div>
		</div>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="{{ asset('import/assets/images/food/sandwich.jpg') }}" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Sandwich</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="font-size-18 mx-10 text-primary icon-Burger"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="{{ asset('import/assets/images/food/salads.jpg') }}" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Salads</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="font-size-18 mx-10 text-primary icon-Carrot"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="{{ asset('import/assets/images/food/burgers.jpg') }}" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Burgers</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="font-size-18 mx-10 text-primary icon-Burger"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="{{ asset('import/assets/images/food/pizza.jpg') }}" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Pizza's</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="font-size-18 mx-10 text-primary icon-Pizza"></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="{{ asset('import/assets/images/food/soups.jpg') }}" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Soups</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="font-size-18 mx-10 text-primary icon-Miso-soup"><span class="path1"></span><span class="path2"></span></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="{{ asset('import/assets/images/food/main.jpg') }}" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Main Course</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="font-size-18 mx-10 text-primary icon-Dinner1"><span class="path1"></span><span class="path2"></span></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="{{ asset('import/assets/images/food/noodles.jpg') }}" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Noodles</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="font-size-18 mx-10 text-primary icon-Sushi"><span class="path1"></span><span class="path2"></span></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="{{ asset('import/assets/images/food/rice.jpg') }}" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Rice</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="font-size-18 mx-10 text-primary icon-Miso-soup"><span class="path1"></span><span class="path2"></span></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="{{ asset('import/assets/images/food/starters.jpg') }}" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Starters</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="font-size-18 mx-10 text-primary icon-Fish"><span class="path1"></span><span class="path2"></span></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="{{ asset('import/assets/images/food/subziyan.jpg') }}" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Subziyan</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="font-size-18 mx-10 text-primary icon-Miso-soup"><span class="path1"></span><span class="path2"></span></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="{{ asset('import/assets/images/food/dals.jpg') }}" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Dals</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="font-size-18 mx-10 text-primary icon-Miso-soup"><span class="path1"></span><span class="path2"></span></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="{{ asset('import/assets/images/food/breads.jpg') }}" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Breads</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="font-size-18 mx-10 text-primary icon-French-Bread"></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="{{ asset('import/assets/images/food/biryanis.jpg') }}" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Pulao / Biryanis</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="font-size-18 mx-10 text-primary icon-Miso-soup"><span class="path1"></span><span class="path2"></span></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="{{ asset('import/assets/images/food/dessert.jpg') }}" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Dessert</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="font-size-18 mx-10 text-primary icon-Ice-cream1"><span class="path1"></span><span class="path2"></span></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="{{ asset('import/assets/images/food/mocktails.jpg') }}" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Smoothies &amp; Mocktails</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="font-size-18 mx-10 text-primary icon-Wine"><span class="path1"></span><span class="path2"></span></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
								</div>
							</div>
						</div>							
					</div>
				</div>
				<div class="col-xxxl-4 col-xl-6 col-lg-6 col-12">
					<div class="box overflow-h">
						<div class="box-body p-0">
							<div>
								<img class="rounded img-fluid" src="{{ asset('import/assets/images/food/icecream.jpg') }}" alt="">
							</div>
						</div>
						<div class="box-body">
							<div class="info-content">
								<h4 class="mb-10 mt-0">Ice Cream</h4>
								<div class="d-flex justify-content-between align-items-center">
									<h4 class="mb-0 text-primary">$6.53 to $10.99</h4>
									<div class="d-flex align-items-center">	
										<span class="font-size-18 mx-10 text-primary icon-Ice-cream"><span class="path1"></span><span class="path2"></span></span>
										<h5 class="text-black mb-0">12 Item</h5>
									</div>
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