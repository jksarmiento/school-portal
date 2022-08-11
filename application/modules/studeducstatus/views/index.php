<?php
main_header(['studeducstatus']);
?>
<!-- ############ PAGE START-->
<div class="padding">
	<div class="p-a light-blue-700 It box-shadow">
		<div class="row">
			<div class="col-sm-12">
				<p class="m-b-0 _400"><i class="glyphicon glyphicon-education"></i> EDUCATIONAL BACKGROUND </p>
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
								<label for="StudentID">Student</label>
								<select id="StudentID" class="form-control" ui-jp="select2" ui-options="{theme: 'bootstrap'}">
									<?php
									if(!empty($students)){
										?>
										<option> -- Select Student -- </option>
										<?php
										foreach ($students as $key => $value){
											?>
											<option value="<?=@$value->ID?>"><?=@$value->Fname?> <?=@$value->Lname?></option>
											<?php
										}
									}else{
										?><option style="color:orange;">Student not found</option>
										<?php
									}
									?>
								</select>
							</div>

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
											<option value="<?=@$value->ID?>"><?=@$value->School?></option>
											<?php
										}
									}else{
										?><option style="color:orange">School not found</option>
										<?php
									}
									?>
								</select>
							</div>

							<div class="form-group">
								<label for="Start_year">Start Year</label>
								<input type="number" class="form-control" id="Start_year" min="1900" max="2099" value="2000" placeholder="Year Started">
							</div>

							<div class="form-group">
								<label for="End_year">End Year</label>
								<input type="number" class="form-control" id="End_year" min="1900" max="2099" value="2000" placeholder="Year Ended">
							</div>

						</form>
						<button type="submit" class="btn btn-primary" id="studeducstatus_save">Submit</button>
					</div>
					<<div class="col-sm-8">
						<div class="table-responsive">
							<table ui-jp="dataTable" class="table table-striped b-t b-b">
								<thead>
									<tr>
										<th style="width: 5%;">#</th>
										<th style="width: 25%;">STUDENT</th>
										<th style="width: 25%;">SCHOOL</th>
										<th style="width: 25%;">START YEAR</th>
										<th style="width: 25%;">END YEAR</th>
										<!-- <th style="width: 25%;">DATE CREATED</th> -->
										<th>OPTIONS</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if(!empty($studeducstatus)){ 
								        foreach ($studeducstatus as $key => $value) {
								            ?>
								                <tr>
								                    <td><?=(@$key+1)?></td>
													<td><?=@$value->Lname?>, <?=@$value->Fname?></td>
								                    <td><?=@$value->School?></td>
													<!-- <td><?=date("M d, Y", strtotime(@$value->Start_year))?></td> -->
								                    <td><?=@$value->Start_year?></td>
													<td><?=@$value->End_year?></td>
								                    <!-- <td><?=date("M d, Y", strtotime(@$value->Date_created))?></td> -->
								                    <td>
								                        <button class="btn btn-danger btn-sm delete" data-id="<?=@$value->ID?>"><i class="fa fa-trash"></i></button>
								                        <a class="btn btn-sm btn-primary" href="<?php echo base_url()?>studeducstatus/studeducstatus_profile/<?=@$value->ID?>"><i class="fa fa-pencil"></i></a>
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
</div>
<!-- ############ PAGE END-->
<?php
main_footer();
?>
<script src="<?php echo base_url() ?>/assets/js/studeducstatus/index.js"></script>