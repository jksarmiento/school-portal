<?php
main_header(['category']);
?>
<!-- ############ PAGE START-->
<div class="padding">
	<div class="p-a light-blue-700 It box-shadow">
		<div class="row">
			<div class="col-sm-12">
				<p class="m-b-0 _400"><i class="fa fa-book"></i> ADD CATEGORY </p>
			</div>
		</div>
	</div>
	<div id="pageMessages"></div>
	<div class="box p-a">
		<div class="box box-body">
			<div class="b-b nav-active-bg">
				<div class="row">
					<div class="col-sm-4">
						<h2>Add Category</h2>
						<form>
							<div class="form-group">
								<label for="category_name">Category Name</label>
								<input type="text" class="form-control" id="category_name" placeholder="Enter Category Name">
							</div>
						</form>
						<button type="submit" class="btn btn-primary" id="category_save">Submit</button>
					</div>
					<div class="col-sm-8">
						<div class="row">
							<div class="col-sm-9">
								<h5>List of Categories</h5>
							</div>
							<!-- <div class="col-sm-3">
								<div class="input-group">
									<input type="text" class="form-control form-control-sm" id="category_search_text" placeholder="Search Categories">
									<span class="input-group-btn">
										<button class="btn btn-sm btn-success" id="category_search" type="button"><i class="fa fa-search"></i></button>
									</span>
								</div>
							</div> -->
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="table-responsive">
									<table class="table table-striped" ui-jp="dataTable">
										<thead>
										<tr>
											<th>#</th>
											<th>NAME</th>
											<th>DATE CREATED</th>
											<th>OPTIONS</th>
										</tr>
										</thead>
										<tbody id="load_category">
											<?php
											if (!empty($details)) {
												foreach ($details as $key => $value) {
													?>
														<tr>
															<td><?=(@$key+1)?></td>
															<td><?=ucwords(@$value->Category_name)?></td>
															<td><?=date("M d, Y", strtotime(@$value->Date_created))?></td>
															<td>
																<button class="btn btn-danger btn-sm" id="category_delete" data-id="<?=@$value->ID?>"><i class="fa fa-trash"></i></button>
																<a class="btn btn-sm btn-primary" href="<?=base_url()?>category/contact_profile/<?=@$value->ID?>"><i class="fa fa-pencil"></i></a>
															</td>
														</tr>
													<?php
												}
											}
											else {
												?>
													<tr>
														<td>
															<div><center><h6 style="color:red">No Data Found.</h6></center></div>
														</td>
														<td>
															<div><center><h6 style="color:red">No Data Found.</h6></center></div>
														</td>
														<td>
															<div><center><h6 style="color:red">No Data Found.</h6></center></div>
														</td>
														<td>
															<div><center><h6 style="color:red">No Data Found.</h6></center></div>
														</td>
													</tr>
												<?php
											}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ############ PAGE END-->
<?php
main_footer();
?>
<script src="<?php echo base_url() ?>/assets/js/category/index.js"></script>