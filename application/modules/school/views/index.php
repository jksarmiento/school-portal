<?php
main_header(['school']);
?>
<!-- ############ PAGE START-->
<div class="padding">
	<div class="p-a light-blue-700 It box-shadow">
		<div class="row">
			<div class="col-sm-12">
				<p class="m-b-0 _400"><i class="fa fa-book"></i> SCHOOL </p>
			</div>
		</div>
	</div>
	<div id="pageMessages"></div>
	<div class="box p-a">
		<div class="box box-body">
			<div class="b-b nav-active-bg">
				<div class="row">
					<div class="col-sm-4">
						<h2>Add School</h2>
						<form>
							<div class="form-group">
								<label for="school_name">School Name</label>
								<input type="text" class="form-control" id="school_name" placeholder="Enter School Name"> <br>

								<label for="cars">Level:</label>
									<select name="" id="">
									  <option value="volvo">Pre-School</option>
									  <option value="saab">Elementary</option>
									  <option value="mercedes">Junior High</option>
									  <option value="audi">Senior High</option>
									  <option value="audi">College</option>
									</select>
							</div>
						</form>
						<button type="submit" class="btn btn-primary" id="school_save">Submit</button>
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
<script src="<?php echo base_url() ?>/assets/js/school/index.js"></script>