<?php
main_header(['students']);
?>
<!-- ############ PAGE START-->
<div class="padding">
	<div class="p-a light-blue-700 It box-shadow">
		<div class="row">
			<div class="col-sm-12">
				<p class="m-b-0 _400"><i class="material-icons" style="font-size:medium">people</i> STUDENT INFO </p>
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
						<div class="table-responsive">
							<table ui-jp="dataTable" class="table table-striped b-t b-b">
								<thead>
									<tr>
										<th style="width: 5%;">#</th>
										<th style="width: 25%;">NAME</th>
										<th style="width: 25%;">SCHOOL</th>
										<th style="width: 25%;">BIRTHDATE</th>
										<th style="width: 25%;">ADDRESS</th>
										<!-- <th style="width: 25%;">DATE CREATED</th> -->
										<th>OPTIONS</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if(!empty($students)){ 
								        foreach ($students as $key => $value) {
								            ?>
								                <tr>
								                    <td><?=(@$key+1)?></td>
													<td><?=@$value->Lname?>, <?=@$value->Fname?></td>
								                    <td><?=@$value->School?></td>
													<td><?=date("M d, Y", strtotime(@$value->Birthday))?></td>
								                    <td><?=@$value->Address?></td>
								                    <!-- <td><?=date("M d, Y", strtotime(@$value->Date_created))?></td> -->
								                    <td>
								                        <button class="btn btn-danger btn-sm delete" data-id="<?=@$value->ID?>"><i class="fa fa-trash"></i></button>
								                        <a class="btn btn-sm btn-primary" href="<?php echo base_url()?>students/students_profile/<?=@$value->ID?>"><i class="fa fa-pencil"></i></a>
								                        <!-- <button type="submit" class="btn btn-sm btn-primary" id="edit" value="<?=@$value->ID?>" data-toggle="modal"><i class="fa fa-pencil"></i></button> -->
								                    </td>
								                </tr>
								            <?php  
								        }        
								    }else{
								        ?>
								            <tr>
								                <td colspan="8">
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
<!-- ############ PAGE END-->
<?php
main_footer();
?>
<script src="<?php echo base_url() ?>/assets/js/students/index.js"></script>