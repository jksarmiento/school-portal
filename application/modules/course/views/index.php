<?php
main_header(['course']);
?>
<!-- ############ PAGE START-->
<div class="padding">
	<div class="p-a light-blue-700 It box-shadow">
		<div class="row">
			<div class="col-sm-12">
				<p class="m-b-0 _400"><i class="fa fa-book"></i> COURSE </p>
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
								<br>
								<label for="Course_code">Course Code</label>
								<input type="text" class="form-control" id="Course_code" placeholder="Enter Course Code">
								<br>
								<label for="select_department">Department</label>
								<select class="form-control" id="select_department"></select>
							</div>
						</form>
						<button type="submit" class="btn btn-primary" id="course_save">Submit</button>
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