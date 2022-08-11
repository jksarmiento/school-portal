<?php
main_header(['studcurr']);
?>
<!-- ############ PAGE START-->
<div class="padding">
	<div class="p-a light-blue-700 It box-shadow">
		<div class="row">
			<div class="col-sm-12">
				<p class="m-b-0 _400"><i class="fas fa-book-reader"></i> STUDENT CURRICULUM </p>
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
								<label for="student">Student</label>
								<select class="form-control select2" id="student" ui-jp="select2" ui-options="{theme: 'bootstrap'}">
									<?php
									if (!empty($students)) {
										?>
										<option value="0">Select Student</option>
										<?php
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
								<select class="form-control select2" id="curriculum" ui-jp="select2" ui-options="{theme: 'bootstrap'}">
									<?php
									if (!empty($curriculum)) {
										?>
										<option value="0">Select Curriculum</option>
										<?php
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
						<button type="submit" class="btn btn-primary" id="studcurr_save">Submit</button>
					</div>
					<div class="col-sm-8">
						<div class="table-responsive">
							<table ui-jp="dataTable" class="table table-striped b-t b-b">
								<thead>
									<tr>
										<th style="width:10%">#</th>
										<th style="width:30%">Student Name</th>
										<th style="width:20%">Curriculum</th>
										<th style="width:20%">Date Assigned</th>
										<th style="width:10%">Active</th>
										<th style="width:10%">Options</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if (!empty($studcurr)) {
										foreach ($studcurr as $key => $value) {
										?>
											<tr>
												<td><?=$key+1?></td>
												<td><?=$value->Lname?>, <?=$value->Fname?> <?=$value->Mname?></td>
												<td><?=$value->Curriculum_name?></td>
												<td><?=date('M j, Y',strtotime($value->Date_created))?></td>
												<td><span class="label <?= ($value->Active == 1) ? "success" : "danger" ?>" title="<?=$value->Active?>"><?= ($value->Active == 1) ? "ACTIVE" : "INACTIVE" ?></td>
												<td>
													<a class="btn btn-sm btn-primary" href="<?=base_url()?>studcurr/contact_studcurr/<?=@$value->ID?>"><i class="fa fa-pencil"></i></a>
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
<script src="<?php echo base_url() ?>/assets/js/studcurr/index.js"></script>