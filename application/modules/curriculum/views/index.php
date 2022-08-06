<?php
main_header(['curriculum']);
?>
<!-- ############ PAGE START-->
<div class="padding">
	<div class="p-a light-blue-700 It box-shadow">
		<div class="row">
			<div class="col-sm-12">
				<p class="m-b-0 _400"><i class="fa fa-book"></i> CURRICULUM </p>
			</div>
		</div>
	</div>
	<div id="pageMessages"></div>
	<div class="box p-a">
		<div class="box box-body">
			<div class="b-b nav-active-bg">
				<div class="row">
					<div class="col-sm-4">
						<h2>Add To Curriculum</h2>
						<form>
							<div class="form-group">
								<label for="course">Course</label>
								<select class="form-control" id="course">
									<?php
									if (!empty($course)) {
										foreach ($course as $key => $value) {
										?>
											<option value="<?=$value->ID?>"><?=$value->Course_name?></option>
										<?php
										}
									}
									?>
								</select>
							</div>
							<div class="form-group">
								<label for="ay">Annual Year</label>
								<select class="form-control" id="ay">
									<?php
									if (!empty($ay)) {
										foreach ($ay as $key => $value) {
										?>
											<option value="<?=$value->ID?>"><?=$value->Start_year?> - <?=$value->End_year?></option>
										<?php
										}
									}
									?>
								</select>
							</div>
							<div class="form-group">
								<label for="year_level">Year Level</label>
								<input type="number" class="form-control" id="year_level" min="1" max="5" step="1" value="1" placeholder="Enter Year Level"/>
							</div>
							<div class="form-group">
								<label for="term">Term</label>
								<input type="number" class="form-control" id="term" min="1" max="3" step="1" value="1" placeholder="Enter Term"/>
							</div>
							<div class="form-group">
								<label for="subject">Subject</label>
								<select class="form-control" id="subject">
									<?php
									if (!empty($subject)) {
										foreach ($subject as $key => $value) {
										?>
											<option value="<?=$value->ID?>"><?=$value->Subject_code?> - <?=$value->Subject_name?></option>
										<?php
										}
									}
									?>
								</select>
							</div>
						</form>
						<button type="submit" class="btn btn-primary" id="curriculum_save">Submit</button>
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
<script src="<?php echo base_url() ?>/assets/js/curriculum/index.js"></script>