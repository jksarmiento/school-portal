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
						<h2>Add Curriculum</h2>
						<form>
							<div class="form-group">
								<label for="course">Course</label>
								<select class="form-control select2" id="course" ui-jp="select2" ui-options="{theme: 'bootstrap'}">
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
								<select class="form-control select2" id="ay" ui-jp="select2" ui-options="{theme: 'bootstrap'}">
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
						</form>
						<button type="submit" class="btn btn-primary" id="curriculum_save">Submit</button>
					</div>
					<div class="col-sm-8">
						<div class="table-responsive">
							<table ui-jp="dataTable" class="table table-striped b-t b-b">
								<thead>
									<tr>
										<th style="width:80%">Curriculum</th>
										<th style="width:20%">Options</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if (!empty($curriculum)) {
										foreach ($curriculum as $key => $value) {
										?>
											<tr>
												<td><?=$value->Curriculum_name?></td>
												<td>
													<a class="btn btn-sm btn-primary" href="<?=base_url()?>curriculum/contact_curriculum/<?=@$value->ID?>"><i class="fa fa-pencil"></i></a>
													<button class="btn btn-danger btn-sm" id="curriculum_delete" data-id="<?=@$value->ID?>"><i class="fa fa-trash"></i></button>
												</td>
											</tr>
										<?php
										}
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
<script src="<?php echo base_url() ?>/assets/js/curriculum/index.js"></script>