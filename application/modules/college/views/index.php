<?php
main_header(['college']);
?>
<!-- ############ PAGE START-->
<div class="padding">
	<div class="p-a light-blue-700 It box-shadow">
		<div class="row">
			<div class="col-sm-12">
				<p class="m-b-0 _400"><i class="fa fa-book"></i> COLLEGE </p>
			</div>
		</div>
	</div>
	<div id="pageMessages"></div>
	<div class="box p-a">
		<div class="box box-body">
			<div class="b-b nav-active-bg">
				<div class="row">
					<div class="col-sm-4">
						<h2>Add College</h2>
						<form>
							<div class="form-group">
								<label for="college_name">College Name</label>
								<input type="text" class="form-control" id="college_name" placeholder="Enter College Name">
								<br>
								<label for="select_school">School</label>
								<select class="form-control" id="select_school"></select>
							</div>
						</form>
						<button type="submit" class="btn btn-primary" id="college_save">Submit</button>
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
<script src="<?php echo base_url() ?>/assets/js/college/index.js"></script>