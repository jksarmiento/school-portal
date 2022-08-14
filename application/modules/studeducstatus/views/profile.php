<?php
main_header(['studeducstatus']);
?>
<!-- ############ PAGE START-->
<div class="padding">
	<div class="p-a light-blue-700 It box-shadow">
		<div class="row">
			<div class="col-sm-12">
				<p class="m-b-0 _400"><i class="glyphicon glyphicon-education"></i> EDIT STATUS </p>
			</div>
		</div>
	</div>
	<div id="pageMessages"></div>
	<div class="box p-a">
		<div class="box box-body">
			<div class="b-b nav-active-bg">
				<div class="row">
					<div class="col-sm-4">
						<form>
							<input type="hidden" id="ID" value="<?=@$details->ID?>"></input>

							<div class="form-group">
								<label for="StudentID">Student</label>
								<input type="text" id="StudentID" value="<?=@$details->Fname?> <?=@$details->Lname?>" class="form-control" readonly="readonly">
							</div>

							<div class="form-group">
								<label for="SchoolID">School</label>
								<input type="text" id="SchoolID" value="<?=@$details->School?>" class="form-control" readonly="readonly">
							</div>

							<div class="form-group">
								<label for="Start_year">Start Year</label>
								<input type="number" class="form-control" id="Start_year" min="1900" max="2099" value="<?=@$details->Start_year?>" placeholder="Year Started">
							</div>

							<div class="form-group">
								<label for="End_year">End Year</label>
								<input type="number" class="form-control" id="End_year" min="1900" max="2099" value="<?=@$details->End_year?>" placeholder="Year Ended">
							</div>
						</form>
						<a type="submit" class="btn btn-primary" id="edit" style="color: white;">Submit</a>
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
<script src="<?php echo base_url() ?>/assets/js/studeducstatus/index.js"></script>