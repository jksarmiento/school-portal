<?php
main_header(['college']);
?>
<!-- ############ PAGE START-->
<div class="padding">
	<div class="p-a light-blue-700 It box-shadow">
		<div class="row">
			<div class="col-sm-12">
				<p class="m-b-0 _400"><i class="fas fa-user-graduate"></i> COLLEGE </p>
			</div>
		</div>
	</div>
	<div id="pageMessages"></div>
	<div class="box p-a">
		<div class="box box-body">
			<div class="b-b nav-active-bg">
				<div class="row">
					<div class="col-sm-4">
						<h2>Edit College</h2>
						<form>
							<div class="form-group">
								<label for="College">College Name</label>
								<input type="text" class="form-control" id="College" value="<?=@$details->College?>" placeholder="Enter College Name">
							</div>
							<div class="form-group">
								<label for="select_school">School</label>
								<select class="form-control" id="SchoolID" ui-jp="select2" ui-options="{theme: 'bootstrap'}">
									<?php
								    if(!empty($school)){ 
								            ?>
								            <option>Select School</option>
								            <?php
								            foreach ($school as $key => $value){
								                ?>
								                <option value="<?=@$value->ID?>"><?=@$value->School?></option>
								                <?php
								            }    
								    }else{
								        ?>
								        <option>No School Available</option>
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
<script src="<?php echo base_url() ?>/assets/js/college/index.js"></script>