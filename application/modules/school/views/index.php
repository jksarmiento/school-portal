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
								<label for="School">School Name</label>
								<input type="text" class="form-control" id="School" placeholder="Enter School Name"> <br>

								<label for="Level">Level:</label>
									<select name="form-control" id="Level">
									  <option value="Pre-School">Pre-School</option>
									  <option value="Elementary">Elementary</option>
									  <option value="Junior High">Junior High</option>
									  <option value="Senior High">Senior High</option>
									  <option value="College">College</option>
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