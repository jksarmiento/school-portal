<?php
main_header(['students']);
?>
<!-- ############ PAGE START-->
<div class="padding">
	<div class="p-a light-blue-700 It box-shadow">
		<div class="row">
			<div class="col-sm-12">
				<p class="m-b-0 _400"><i class="material-icons" style="font-size:medium">people</i> STUDENTS INFO </p>
			</div>
		</div>
	</div>
	<div id="pageMessages"></div>
	<div class="box p-a">
		<div class="box box-body">
			<div class="b-b nav-active-bg">
				<div class="row">
					<div class="col-sm-4">
						<form>
							<div class="form-group">
								<label for="SchoolID">School</label>
								<select id="SchoolID" class="form-control">
									<?php
									if(!empty($school)){
										?>
										<option>Select School </option>
										<?php
										foreach ($school as $key => $value){
											?>
											<option value="<?=@$value->ID?>"><?=@$value->
												School?></option>
											<?php
										}
									}else{
										?><option>ID not found</option>
										<?php
									}
									?>
								</select>
							</div>

							<div class="form-group">
								<label for="Fname">First Name</label>
								<input type="text" class="form-control" id="Fname" placeholder="Enter First Name">
							</div>

							<div class="form-group">
								<label for="Mname">Middle Name</label>
								<input type="text" class="form-control" id="Mname" placeholder="Enter Middle Name">
							</div>

							<div class="form-group">
								<label for="Lname">Last Name</label>
								<input type="text" class="form-control" id="Lname" placeholder="Enter Last Name">
							</div>
							
							<div class="form-group">
								<label for="Birthday">Birthday</label>
								<input type="date" class="form-control" id="Birthday" placeholder="Enter Birthdate">
							</div>

							<div class="form-group">
								<label for="Address">Address</label>
								<input type="text" class="form-control" id="Address" placeholder="Enter Address">
							</div>

							<div class="form-group">
								<label for="City">City</label>
								<input type="text" class="form-control" id="City" placeholder="Enter City">
							</div>

							<div class="form-group">
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