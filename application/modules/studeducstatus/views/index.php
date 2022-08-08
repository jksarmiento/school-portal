<?php
main_header(['studeducstatus']);
?>
<!-- ############ PAGE START-->
<div class="padding">
	<div class="p-a light-blue-700 It box-shadow">
		<div class="row">
			<div class="col-sm-12">
				<p class="m-b-0 _400"><i class="fa fa-book"></i> EDUCATION STATUS </p>
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

								<label for="Start_year">Start Year</label>
								<input type="number" class="form-control" id="Start_year" min="1900" max="2099" value="2010" placeholder="Year Started">

								<label for="End_year">End Year</label>
								<input type="number" class="form-control" id="End_year" min="1900" max="2099" value="2010" placeholder="Year Ended">

								<label for="StudentID">Student ID</label>
								<input type="number" class="form-control" id="StudentID" placeholder="Enter Student ID">

							</div>
						</form>
						<button type="submit" class="btn btn-primary" id="studeducstatus_save">Submit</button>
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
<script src="<?php echo base_url() ?>/assets/js/studeducstatus/index.js"></script>