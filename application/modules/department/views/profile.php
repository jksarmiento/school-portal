<?php
main_header(['department']);
?>
<!-- ############ PAGE START-->
<div class="padding">
	<div class="p-a light-blue-700 It box-shadow">
		<div class="row">
			<div class="col-sm-12">
				<p class="m-b-0 _400"><i class="fas fa-project-diagram"></i> DEPARTMENT </p>
			</div>
		</div>
	</div>
	<div id="pageMessages"></div>
	<div class="box p-a">
		<div class="box box-body">
			<div class="b-b nav-active-bg">
				<div class="row">
					<div class="col-sm-4">
						<h2>Edit Department</h2>
						<form>
						<input type="hidden" id="ID" value="<?=@$details->ID?>"></input>
							<div class="form-group">
								<label for="Department">Department Name</label>
								<input type="text" class="form-control" id="Department" value="<?=@$details->Department?>" placeholder="Enter Department Name">
							</div>
							<div class="form-group">
								<label for="select_college">College</label>
								<select class="form-control" id="CollegeID" ui-jp="select2" ui-options="{theme: 'bootstrap'}">
									<?php
								    if(!empty($college)){ 
								            ?>
								            <option>Select College</option>
								            <?php
								            foreach ($college as $key => $value){
								                ?>
								                <option value="<?=@$value->ID?>"><?=@$value->College?></option>
								                <?php
								            }    
								    }else{
								        ?>
								        <option>No College Available</option>
								        <?php
								    }
								?>
								</select>
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
<script src="<?php echo base_url() ?>/assets/js/department/index.js"></script>