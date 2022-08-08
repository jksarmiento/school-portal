<?php
main_header(['studcurr']);
?>
<!-- ############ PAGE START-->
<div class="padding">
	<div class="p-a light-blue-700 It box-shadow">
		<div class="row">
			<div class="col-sm-12">
				<p class="m-b-0 _400"><i class="fa fa-book"></i> STUDENT CURRICULUM </p>
			</div>
		</div>
	</div>
	<div id="pageMessages"></div>
	<div class="box p-a">
		<div class="box box-body">
			<div class="b-b nav-active-bg">
				<div class="row">
					<div class="col-sm-4">
						<h2>Assign Curriculum</h2>
						<form>
							<div class="form-group">
								<label for="ay">Student</label>
								<select class="form-control" id="student">
									<?php
									if (!empty($students)) {
										foreach ($students as $key => $value) {
										?>
											<option value="<?=$value->ID?>"><?=$value->Lname?>, <?=$value->Fname?> <?=$value->Mname?></option>
										<?php
										}
									}
									?>
								</select>
							</div>
							<div class="form-group">
								<label for="ay">Curriculum</label>
								<select class="form-control" id="curriculum">
									<?php
									if (!empty($curriculum)) {
										foreach ($curriculum as $key => $value) {
										?>
											<option value="<?=$value->ID?>"><?=$value->Curriculum_name?></option>
										<?php
										}
									}
									?>
								</select>
							</div>
						</form>
						<button type="submit" class="btn btn-primary" id="term_save">Submit</button>
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
<script src="<?php echo base_url() ?>/assets/js/term/index.js"></script>