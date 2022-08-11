<?php
main_header(['subject']);
?>
<!-- ############ PAGE START-->
<div class="padding">
	<div class="p-a light-blue-700 It box-shadow">
		<div class="row">
			<div class="col-sm-12">
				<p class="m-b-0 _400"><i class="fa fa-book"></i> SUBJECT </p>
			</div>
		</div>
	</div>
	<div id="pageMessages"></div>
	<div class="box p-a">
		<div class="box box-body">
			<div class="b-b nav-active-bg">
				<div class="row">
					<div class="col-sm-4">
						<h2>Edit Subject</h2>
						<form>
						<input type="hidden" id="ID" value="<?=@$details->ID?>"></input>
							<div class="form-group"> 	
								<label for="Subject_code">Subject Code</label>
								<input type="text" class="form-control" id="Subject_code" value="<?=@$details->Subject_code?>" placeholder="Enter Subject Code">
							</div>
							<div class="form-group">
								<label for="Subject_name">Subject Name</label>
								<input type="text" class="form-control" id="Subject_name" value="<?=@$details->Subject_name?>" placeholder="Enter Subject Name">
							</div>
							<div class="form-group">
								<label>Units</label>
								<input type="number" class="form-control" id="Units" value="<?=@$details->Units?>" placeholder="Enter Units">
							</div>
							<div class="form-group">
								<label style="font-size: 17px;">Description
								<textarea class="form-control" rows="2" cols="25" value="<?=@$details->Description?>" placeholder="This is the default text" id="Description"></textarea>
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
<script src="<?php echo base_url() ?>/assets/js/subject/index.js"></script>