<?php
main_header(['course']);
?>
<!-- ############ PAGE START-->
<div class="padding">
	<div class="p-a light-blue-700 It box-shadow">
		<div class="row">
			<div class="col-sm-12">
				<p class="m-b-0 _400"><i class="material-icons" style="font-size: medium;">book</i> COURSE </p>
			</div>
		</div>
	</div>
	<div id="pageMessages"></div>
	<div class="box p-a">
		<div class="box box-body">
			<div class="b-b nav-active-bg">
				<div class="row">
					<div class="col-sm-4">
						<h2>Add Course</h2>
						<form>
							<div class="form-group">
								<label for="Course_name">Course Name</label>
								<input type="text" class="form-control" id="Course_name" placeholder="Enter Course Name">
							</div>
							<div class="form-group">
								<label for="Course_code">Course Code</label>
								<input type="text" class="form-control" id="Course_code" placeholder="Enter Course Code">
							</div>
							<div class="form-group">
								<label for="select_department">Department</label>
								<select class="form-control" id="DeptID" ui-jp="select2" ui-options="{theme: 'bootstrap'}">
									<?php
									    if(!empty($department)){ 
									            ?>
									            <option>Select Department</option>
									            <?php
									            foreach ($department as $key => $value){
									                ?>
									                 <option value="<?=@$value->ID?>"><?=@$value->Department?></option>
									                <?php
									            }    
									    }else{
									        ?>
									        <option>No Department Available</option>
									        <?php
									    }
									?>
								</select>
							</div>
						</form>
						<button type="submit" class="btn btn-primary" id="course_save">Submit</button>
					</div>

					<div class="col-sm-8">
						<div class="table-responsive">
							<table ui-jp="dataTable" class="table table-striped b-t b-b">
							<thead>
								<tr>
									<th style="width: 5%;">#</th>
									<th style="width: 25%;">COURSE CODE</th>
									<th style="width: 25%;">COURSE NAME</th>
									<th style="width: 25%;">DEPARTMENT</th>
									<th style="width: 25%;">DATE CREATED</th>
									<th>OPTIONS</th>
								</tr>
							</thead>
								<tbody>
									<?php
									if(!empty($course)){ 
								        foreach ($course as $key => $value) {
								            ?>
								                <tr>
								                    <td><?=(@$key+1)?></td>
								                    <td><?=@$value->Course_code?></td>
								                    <td><?=@$value->Course_name?></td>
								                    <td><?=@$value->Department?></td>
								                    <td><?=date("M d, Y", strtotime(@$value->Date_created))?></td>
								                    <td>
								                        <button class="btn btn-danger btn-sm delete" data-id="<?=@$value->ID?>"><i class="fa fa-trash"></i></button>
								                        <a class="btn btn-sm btn-primary" href="<?php echo base_url()?>course/course_profile/<?=@$value->ID?>"><i class="fa fa-pencil"></i></a>
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
<script src="<?php echo base_url() ?>/assets/js/course/index.js"></script>