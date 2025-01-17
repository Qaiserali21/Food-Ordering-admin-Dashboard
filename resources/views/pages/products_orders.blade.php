@include('layouts.Header')

        @include('layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 591px;">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Orders</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">e-Commerce</li>
								<li class="breadcrumb-item active" aria-current="page">Orders</li>
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
				  <div class="box-body">
					<div class="table-responsive">
						<div id="productorder_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="productorder_length"><label>Show <select name="productorder_length" aria-controls="productorder" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="productorder_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="productorder"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="productorder" class="table table-hover no-wrap product-order dataTable no-footer" data-page-size="10" role="grid" aria-describedby="productorder_info">
							<thead>
								<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="productorder" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Customer: activate to sort column descending">Customer</th><th class="sorting" tabindex="0" aria-controls="productorder" rowspan="1" colspan="1" aria-label="Order ID: activate to sort column ascending">Order ID</th><th class="sorting" tabindex="0" aria-controls="productorder" rowspan="1" colspan="1" aria-label="Photo: activate to sort column ascending">Photo</th><th class="sorting" tabindex="0" aria-controls="productorder" rowspan="1" colspan="1" aria-label="Product: activate to sort column ascending">Product</th><th class="sorting" tabindex="0" aria-controls="productorder" rowspan="1" colspan="1" aria-label="Quantity: activate to sort column ascending">Quantity</th><th class="sorting" tabindex="0" aria-controls="productorder" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending">Date</th><th class="sorting" tabindex="0" aria-controls="productorder" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Status</th><th class="sorting" tabindex="0" aria-controls="productorder" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending">Actions</th></tr>
							</thead>
							<tbody>
								
								
								
								
								
								
								
								
								
								
								
								

							<tr role="row" class="odd">
									<td class="sorting_1">Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-1.png" alt="product" width="80"></td>
									<td>Product Title</td>
									<td>17</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-success">Paid</span></td>
									<td><a href="javascript:void(0)" class="text-info mr-10" data-toggle="tooltip" data-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-original-title="Delete" data-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr><tr role="row" class="even">
									<td class="sorting_1">Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-2.png" alt="product" width="80"></td>
									<td>Product Title</td>
									<td>12</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-warning">Pending</span></td>
									<td><a href="javascript:void(0)" class="text-info mr-10" data-toggle="tooltip" data-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-original-title="Delete" data-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr><tr role="row" class="odd">
									<td class="sorting_1">Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-3.png" alt="product" width="80"></td>
									<td>Product Title</td>
									<td>15</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-success">Paid</span></td>
									<td><a href="javascript:void(0)" class="text-info mr-10" data-toggle="tooltip" data-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-original-title="Delete" data-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr><tr role="row" class="even">
									<td class="sorting_1">Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-4.png" alt="product" width="80"></td>
									<td>Product Title</td>
									<td>19</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-danger">Failed</span></td>
									<td><a href="javascript:void(0)" class="text-info mr-10" data-toggle="tooltip" data-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-original-title="Delete" data-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr><tr role="row" class="odd">
									<td class="sorting_1">Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-5.png" alt="product" width="80"></td>
									<td>Product Title</td>
									<td>24</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-success">Pending</span></td>
									<td><a href="javascript:void(0)" class="text-info mr-10" data-toggle="tooltip" data-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-original-title="Delete" data-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr><tr role="row" class="even">
									<td class="sorting_1">Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-6.png" alt="product" width="80"></td>
									<td>Product Title</td>

									<td>04</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-danger">Failed</span></td>
									<td><a href="javascript:void(0)" class="text-info mr-10" data-toggle="tooltip" data-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-original-title="Delete" data-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr><tr role="row" class="odd">
									<td class="sorting_1">Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-7.png" alt="product" width="80"></td>
									<td>Product Title</td>
									<td>10</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-success">Paid</span></td>
									<td><a href="javascript:void(0)" class="text-info mr-10" data-toggle="tooltip" data-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-original-title="Delete" data-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr><tr role="row" class="even">
									<td class="sorting_1">Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-8.png" alt="product" width="80"></td>
									<td>Product Title</td>
									<td>11</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-warning">Pending</span></td>
									<td><a href="javascript:void(0)" class="text-info mr-10" data-toggle="tooltip" data-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-original-title="Delete" data-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr><tr role="row" class="odd">
									<td class="sorting_1">Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-9.png" alt="product" width="80"></td>
									<td>Product Title</td>
									<td>13</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-success">Paid</span></td>
									<td><a href="javascript:void(0)" class="text-info mr-10" data-toggle="tooltip" data-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-original-title="Delete" data-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr><tr role="row" class="even">
									<td class="sorting_1">Maical Roy</td>
									<td>#12485791</td>
									<td><img src="../images/product/product-10.png" alt="product" width="80"></td>
									<td>Product Title</td>
									<td>34</td>
									<td>24-01-2018</td>
									<td><span class="badge badge-pill badge-warning">Pending</span></td>
									<td><a href="javascript:void(0)" class="text-info mr-10" data-toggle="tooltip" data-original-title="Edit">
											<i class="ti-marker-alt"></i>
										</a> 
										<a href="javascript:void(0)" class="text-danger" data-original-title="Delete" data-toggle="tooltip">
											<i class="ti-trash"></i>
										</a>
									</td>
								</tr></tbody>						
						</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="productorder_info" role="status" aria-live="polite">Showing 1 to 10 of 12 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="productorder_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="productorder_previous"><a href="#" aria-controls="productorder" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="productorder" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="productorder" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="productorder_next"><a href="#" aria-controls="productorder" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
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