<?php
main_header(['term']);
?>
<!-- ############ PAGE START-->
<div class="padding">
	<div class="p-a light-blue-700 It box-shadow">
		<div class="row">
			<div class="col-sm-12">
				<p class="m-b-0 _400"><i class="fa fa-book"></i> TERM </p>
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
								<select class="form-control" id="ay"></select>
							</div>
							<div class="form-group">
								<label for="term">Term</label>
								<input type="number" class="form-control" id="term" min="1" max="3" step="1" value="1" placeholder="Enter Term Number"/>
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