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
						<h2>Edit Course</h2>
						<form>
						<input type="hidden" id="ID" value="<?=@$details->ID?>"></input>
							<div class="form-group">
								<label for="Course_name">Course Name</label>
								<input type="text" class="form-control" id="Course_name" value="<?=@$details->Course_name?>" placeholder="Enter Course Name">
							</div>
							<div class="form-group">
								<label for="Course_code">Course Code</label>
								<input type="text" class="form-control" id="Course_code" value="<?=@$details->Course_code?>" placeholder="Enter Course Code">
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
<script src="<?php echo base_url() ?>/assets/js/course/index.js"></script>