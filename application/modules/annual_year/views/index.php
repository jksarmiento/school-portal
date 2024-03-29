<?php
main_header(['annual_year']);
?>
<!-- ############ PAGE START-->
<div class="padding">
	<div class="p-a light-blue-700 It box-shadow">
		<div class="row">
			<div class="col-sm-12">
				<p class="m-b-0 _400"><i class="far fa-calendar-alt"></i> ANNUAL YEAR </p>
			</div>
		</div>
	</div>
	<div id="pageMessages"></div>
	<div class="box p-a">
		<div class="box box-body">
			<div class="b-b nav-active-bg">
				<div class="row">
					<div class="col-sm-4">
						<h2>Add Annual Year</h2>
						<form>
							<div class="form-group">
								<label for="start_year">Start Year</label>
								<input type="number" class="form-control" id="start_year" min="1900" max="2099" step="1" value="2022" placeholder="Enter Start Year"/>
							</div>
							<div class="form-group">
								<label for="select_college">End Year</label>
								<input type="number" class="form-control" id="end_year" min="1901" max="3000" step="1" value="2023" placeholder="Enter End Year" disabled/>
							</div>
						</form>
						<button type="submit" class="btn btn-primary" id="ay_save">Submit</button>
					</div>
					<div class="col-sm-8">
						<div class="table-responsive">
							<table ui-jp="dataTable" class="table table-striped b-t b-b">
								<thead>
									<tr>
										<th style="width:10%">#</th>
										<th style="width:45%">Start Year</th>
										<th style="width:45%">End year</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if (!empty($ay)) {
										foreach ($ay as $key => $value) {
										?>
											<tr>
												<td><?=$key+1?></td>
												<td><?=$value->Start_year?></td>
												<td><?=$value->End_year?></td>
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
<script src="<?php echo base_url() ?>/assets/js/annual_year/index.js"></script>