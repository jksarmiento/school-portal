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
				</div>
			</div>
		</div>
	</div>
</div>	
<!-- ############ PAGE END-->
<?php
main_footer();
?>
<script src="<?php echo base_url() ?>/assets/js/curricuulm/index.js"></script>