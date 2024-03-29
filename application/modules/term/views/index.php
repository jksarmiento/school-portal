<?php
main_header(['term']);
?>
<!-- ############ PAGE START-->
<div class="padding">
	<div class="p-a light-blue-700 It box-shadow">
		<div class="row">
			<div class="col-sm-12">
				<p class="m-b-0 _400"><i class="fa fa-calendar-plus-o"></i> TERM </p>
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
							<div class="form-group">
								<label for="term">Term</label>
								<input type="number" class="form-control" id="term" min="1" max="3" step="1" value="1" placeholder="Enter Term Number"/>
							</div>
						</form>
						<button type="submit" class="btn btn-primary" id="term_save">Submit</button>
					</div>
					<div class="col-sm-8">
						<div class="table-responsive">
							<table ui-jp="dataTable" class="table table-striped b-t b-b">
								<thead>
									<tr>
										<th style="width:10%">#</th>
										<th style="width:45%">Annual Year</th>
										<th style="width:45%">Term</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if (!empty($term)) {
										foreach ($term as $key => $value) {
										?>
											<tr>
												<td><?=$key+1?></td>
												<td><?=$value->Start_year?> - <?=$value->End_year?></td>
												<td><?=$value->Term?></td>
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
<script src="<?php echo base_url() ?>/assets/js/term/index.js"></script>