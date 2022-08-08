<?php
main_header(['students']);
?>
<!-- ############ PAGE START-->
<div class="padding">
	<div class="p-a light-blue-700 It box-shadow">
		<div class="row">
			<div class="col-sm-12">
				<p class="m-b-0 _400"><i class="fa fa-book"></i> STUDENTS INFO </p>
			</div>
		</div>
	</div>
	<div id="pageMessages"></div>
	<div class="box p-a">
		<div class="box box-body">
			<div class="b-b nav-active-bg">
				<div class="row">
					<div class="col-sm-4">
						<!-- <h2>Add Category</h2> -->
						<form>
							<div class="form-group">
								<!-- FOR FUTURE USE OF THE STUDENTS ID DROP FUNCTION --!>
								<!-- <select id="" class="form-control" ui-jp="select2" ui-options="{theme: 'bootstrap'}">
									<option value=""> -- School ID -- </option>
								</select> -->
								
								<label for="SchoolID">School ID</label>
								<input type="number" class="form-control" id="SchoolID" placeholder="Enter SchoolID">

								<label for="Fname">First Name</label>
								<input type="text" class="form-control" id="Fname" placeholder="Enter First Name">

								<label for="Mname">Middle Name</label>
								<input type="text" class="form-control" id="Mname" placeholder="Enter Middle Name">

								<label for="Lname">Last Name</label>
								<input type="text" class="form-control" id="Lname" placeholder="Enter Last Name">

								<label for="Birthday">Birthday</label>
								<input type="date" class="form-control" id="Birthday" placeholder="Enter Birthdate">

								<label for="Address">Address</label>
								<input type="text" class="form-control" id="Address" placeholder="Enter Address">

								<label for="City">City</label>
								<input type="text" class="form-control" id="City" placeholder="Enter City">

								<label for="Province">Province</label>
								<input type="text" class="form-control" id="Province" placeholder="Enter Province">
							</div>
						</form>
						<button type="submit" class="btn btn-primary" id="students_save">Submit</button>
					</div>
					<div class="col-sm-8">
						<div class="row">
							<div class="col-sm-9">
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
						<!-- <div class="row">
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
						</div> -->
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
<script src="<?php echo base_url() ?>/assets/js/students/index.js"></script>