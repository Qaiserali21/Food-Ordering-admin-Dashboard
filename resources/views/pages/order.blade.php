@include('layouts.Header')

        @include('layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper" style="min-height: 591px;">
			<div class="container-full">
			<div class="content-header">
				<div class="d-flex align-items-center">
					<div class="mr-auto">
						<h3 class="page-title">Order List</h3>
						<div class="d-inline-block align-items-center">
							<nav>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
									<li class="breadcrumb-item" aria-current="page">Order</li>
									<li class="breadcrumb-item active" aria-current="page">Order List</li>
								</ol>
							</nav>
						</div>
					</div>				
				</div>
			</div>
			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="col-12">
						<div class="box">
							<div class="box-body px-0">
								<div class="table-responsive rounded card-table">
									<div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table class="table border-no dataTable no-footer" id="example1" role="grid" aria-describedby="example1_info">
										<thead>
											<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Order ID: activate to sort column descending">Order ID</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending">Date</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Customer Name: activate to sort column ascending">Customer Name</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Location: activate to sort column ascending">Location</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending">Amount</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Status Order: activate to sort column ascending">Status Order</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label=": activate to sort column ascending"></th></tr>
										</thead>
										<tbody>
											
											
											
											
											
											
											
											
											
											
											
										<tr class="hover-primary odd" role="row">
												<td class="sorting_1">#245879</td>
												<td>14 April 2021,<span class="font-size-12"> 03:13 AM</span></td>
												<td>Aaliyah clark</td>
												<td>1623 E Updahl Ct, Harrison, ID, 83833</td>
												<td>$124.6</td>
												<td>												
													<span class="badge badge-pill badge-primary-light">Delivery</span>
												</td>
												<td>												
													<div class="btn-group">
													<a class="hover-primary dropdown-toggle no-caret" data-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Accept Order</a>
														<a class="dropdown-item" href="#">Reject Order</a>
													</div>
													</div>
												</td>
											</tr><tr class="hover-primary even" role="row">
												<td class="sorting_1">#245880</td>
												<td>25 April 2021,<span class="font-size-12"> 11:22 AM</span></td>
												<td>Boone Doe</td>
												<td>261 Poplar Ave, Devon, PA, 19333</td>
												<td>$74.99</td>
												<td>
													<span class="badge badge-pill badge-danger-light">New Order</span>
												</td>
												<td>
													<div class="btn-group">
													<a class="hover-primary dropdown-toggle no-caret" data-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Accept Order</a>
														<a class="dropdown-item" href="#">Reject Order</a>
													</div>
													</div>
												</td>
											</tr><tr class="hover-primary odd" role="row">
												<td class="sorting_1">#245881</td>
												<td>25 April 2021,<span class="font-size-12"> 11:52 AM</span></td>
												<td>Carlie Paton</td>
												<td>8959 State 405 Rte, Maceo, KY, 42355</td>
												<td>$66.21</td>
												<td>
													<span class="badge badge-pill badge-primary-light">Delivery</span>
												</td>
												<td>
													<div class="btn-group">
													<a class="hover-primary dropdown-toggle no-caret" data-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Accept Order</a>
														<a class="dropdown-item" href="#">Reject Order</a>
													</div>
													</div>
												</td>
											</tr><tr class="hover-primary even" role="row">
												<td class="sorting_1">#245882</td>
												<td>27 April 2021,<span class="font-size-12"> 02:25 PM</span></td>
												<td>Delilah</td>
												<td>4480 Ka Haku Rd, Princeville, HI, 96722 </td>
												<td>$89.32</td>
												<td>
													<span class="badge badge-pill badge-danger-light">New Order</span>
												</td>
												<td>
													<div class="btn-group">
													<a class="hover-primary dropdown-toggle no-caret" data-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Accept Order</a>
														<a class="dropdown-item" href="#">Reject Order</a>
													</div>
													</div>
												</td>
											</tr><tr class="hover-primary odd" role="row">
												<td class="sorting_1">#245883</td>
												<td>27 April 2021,<span class="font-size-12"> 02:30 PM</span></td>
												<td>Hannah Doe</td>
												<td>128 Mclemore Rd, Taft, TN, 38488</td>
												<td>$85.2</td>
												<td>
													<span class="badge badge-pill badge-primary-light">Delivery</span>
												</td>
												<td>
													<div class="btn-group">
													<a class="hover-primary dropdown-toggle no-caret" data-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Accept Order</a>
														<a class="dropdown-item" href="#">Reject Order</a>
													</div>
													</div>
												</td>
											</tr><tr class="hover-primary even" role="row">
												<td class="sorting_1">#245884</td>
												<td>27 April 2021,<span class="font-size-12"> 12:42 AM</span></td>
												<td>Emerson Clark</td>
												<td>505 E 14th St, Scotland Neck, NC, 27874</td>
												<td>$18.5</td>
												<td>
													<span class="badge badge-pill badge-primary-light">Delivery</span>
												</td>
												<td>
													<div class="btn-group">
													<a class="hover-primary dropdown-toggle no-caret" data-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Accept Order</a>
														<a class="dropdown-item" href="#">Reject Order</a>
													</div>
													</div>
												</td>
											</tr><tr class="hover-primary odd" role="row">
												<td class="sorting_1">#245885</td>
												<td>27 April 2021,<span class="font-size-12"> 12:32 AM</span></td>
												<td>Crystal Doe</td>
												<td>312 S Judd St, Sioux City, IA, 51103</td>
												<td>$125.2</td>
												<td>
													<span class="badge badge-pill badge-primary-light">Delivery</span>
												</td>
												<td>
													<div class="btn-group">
													<a class="hover-primary dropdown-toggle no-caret" data-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Accept Order</a>
														<a class="dropdown-item" href="#">Reject Order</a>
													</div>
													</div>
												</td>
											</tr><tr class="hover-primary even" role="row">
												<td class="sorting_1">#245886</td>
												<td>29 April 2021,<span class="font-size-12"> 11:12 AM</span></td>
												<td>Jenny don</td>
												<td>4381 Rutledge Pike, Rutledge, TN, 37861</td>
												<td>$39.25</td>
												<td>
													<span class="badge badge-pill badge-warning-light">On Delivery</span>
												</td>
												<td>
													<div class="btn-group">
													<a class="hover-primary dropdown-toggle no-caret" data-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Accept Order</a>
														<a class="dropdown-item" href="#">Reject Order</a>
													</div>
													</div>
												</td>
											</tr><tr class="hover-primary odd" role="row">
												<td class="sorting_1">#245887</td>
												<td>29 April 2021,<span class="font-size-12"> 10:35 AM</span></td>
												<td>Joanne Clark</td>
												<td>Po Box 232, Bimble, KY, 40915</td>
												<td>$55.2</td>
												<td>
													<span class="badge badge-pill badge-warning-light">On Delivery</span>
												</td>
												<td>
													<div class="btn-group">
													<a class="hover-primary dropdown-toggle no-caret" data-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Accept Order</a>
														<a class="dropdown-item" href="#">Reject Order</a>
													</div>
													</div>
												</td>
											</tr><tr class="hover-primary even" role="row">
												<td class="sorting_1">#245888</td>
												<td>30 April 2021,<span class="font-size-12"> 10:42 AM</span></td>
												<td>Madeline doe</td>
												<td>146 Patterson Dr, Hayneville, AL, 36040</td>
												<td>$24.55</td>
												<td>
													<span class="badge badge-pill badge-warning-light">On Delivery</span>
												</td>
												<td>
													<div class="btn-group">
													<a class="hover-primary dropdown-toggle no-caret" data-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Accept Order</a>
														<a class="dropdown-item" href="#">Reject Order</a>
													</div>
													</div>
												</td>
											</tr></tbody>
									</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 11 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
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