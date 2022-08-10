<?php
main_header(['students']);
?>
<!-- ############ PAGE START-->
<div class="padding">
	<div class="p-a light-blue-700 It box-shadow">
		<div class="row">
			<div class="col-sm-12">
				<p class="m-b-0 _400"><i class="material-icons" style="font-size:medium;">people</i> EDIT STUDENT INFO </p>
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
							<input type="hidden" id="ID" value="<?=@$details->ID?>"></input>
						<div class="form-group">
								<label for="SchoolID">School</label>
								<select id="SchoolID" class="form-control" ui-jp="select2" ui-options="{theme: 'bootstrap'}">
									<?php
									if(!empty($school)){
										?>
										<option> -- Select School -- </option>
										<?php
										foreach ($school as $key => $value){
											?>
											<option value="<?=@$value->ID?>"><?=@$value->
												School?></option>
											<?php
										}
									}else{
										?><option>School not found</option>
										<?php
									}
									?>
								</select>
							</div>

							<div class="form-group">
								<label for="Fname">First Name</label>
								<input type="text" class="form-control" id="Fname" value="<?=@$details->Fname?>" placeholder="Enter First Name">
							</div>

							<div class="form-group">
								<label for="Mname">Middle Name</label>
								<input type="text" class="form-control" id="Mname" value="<?=@$details->Mname?>" placeholder="Enter Middle Name">
							</div>

							<div class="form-group">
								<label for="Lname">Last Name</label>
								<input type="text" class="form-control" id="Lname" value="<?=@$details->Lname?>" placeholder="Enter Last Name">
							</div>
							
							<div class="form-group">
								<label for="Birthday">Birthday</label>
								<input type="date" class="form-control" id="Birthday" value="<?=date('Y-m-d', strtotime(@$details->Birthday))?>" placeholder="Enter Birthdate">
							</div>

							<div class="form-group">
								<label for="Address">Address</label>
								<input type="text" class="form-control" id="Address" value="<?=@$details->Address?>" placeholder="Enter Address">
							</div>

							<div class="form-group">
								<label for="City">City</label>
								<input type="text" class="form-control" id="City" value="<?=@$details->City?>" placeholder="Enter City">
							</div>

							<div class="form-group">
								<label for="Province">Province</label>
								<input type="text" class="form-control" id="Province" value="<?=@$details->Province?>" placeholder="Enter Province">
							</div>
						</form>
						<button type="submit" class="btn btn-primary" id="edit">Submit</button>
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