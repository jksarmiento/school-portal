<?php
main_header(['term']);
?>
<!-- ############ PAGE START-->
<div class="padding">
	<div class="p-a light-blue-700 It box-shadow">
		<div class="row">
			<div class="col-sm-12">
				<p class="m-b-0 _400"><i class="fa fa-book"></i> TERM </p>
			</div>
		</div>
	</div>
	<div id="pageMessages"></div>
	<div class="box p-a">
		<div class="box box-body">
			<div class="b-b nav-active-bg">
				<div class="row">
					<div class="col-sm-4">
						<h2>Add Term</h2>
						<form>
							<div class="form-group">
								<label for="department_name">Annual Year</label>
								<input type="text" class="form-control" id="department_name" placeholder="Enter Department Name">
								<br>
								<label for="select_college">Term</label>
								<select class="form-control" id="select_college"></select>
							</div>
						</form>
						<button type="submit" class="btn btn-primary" id="department_save">Submit</button>
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
<script src="<?php echo base_url() ?>/assets/js/department/index.js"></script>