<?php
main_header(['school']);
?>
<!-- ############ PAGE START-->
<div class="padding">
	<div class="p-a light-blue-700 It box-shadow">
		<div class="row">
			<div class="col-sm-12">
				<p class="m-b-0 _400"><i class="fas fa-school"></i> SCHOOL </p>
			</div>
		</div>
	</div>
	<div id="pageMessages"></div>
	<div class="box p-a">
		<div class="box box-body">
			<div class="b-b nav-active-bg">
				<div class="row">
					<div class="col-sm-4">
						<h2>Edit School</h2>
						<form>
							<input type="text" class="form-control" id="ID" value="<?=@$details->ID?>" hidden>
							<div class="form-group">
								<label for="School">School Name</label>
								<input type="text" class="form-control" id="School" value="<?=@$details->School?>" placeholder="Enter School Name">
							</div>
							<div class="form-group">
								<label for="Level">Level:</label>
									<select class="form-control" id="Level" ui-jp="select2" ui-options="{theme: 'bootstrap'}">
									  <option value="Pre-School">Pre-School</option>
									  <option value="Elementary">Elementary</option>
									  <option value="Junior High">Junior High</option>
									  <option value="Senior High">Senior High</option>
									  <option value="College">College</option>
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
<script src="<?php echo base_url() ?>/assets/js/school/index.js"></script>