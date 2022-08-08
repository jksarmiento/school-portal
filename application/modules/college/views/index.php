<?php
main_header(['college']);
?>
<!-- ############ PAGE START-->
<div class="padding">
	<div class="p-a light-blue-700 It box-shadow">
		<div class="row">
			<div class="col-sm-12">
				<p class="m-b-0 _400"><i class="fa fa-book"></i> COLLEGE </p>
			</div>
		</div>
	</div>
	<div id="pageMessages"></div>
	<div class="box p-a">
		<div class="box box-body">
			<div class="b-b nav-active-bg">
				<div class="row">
					<div class="col-sm-4">
						<h2>Add College</h2>
						<form>
							<div class="form-group">
								<label for="College">College Name</label>
								<input type="text" class="form-control" id="College" placeholder="Enter College Name">
								<br>
								<label for="select_school">School</label>
								<select class="form-control" id="SchoolID">
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
						<button type="submit" class="btn btn-primary" id="college_save">Submit</button>
					</div>

					<div class="col-sm-8">
						<table class="table border-in-table table-hover table-sm">
							<thead>
								<tr>
									<th style="width: 5%;">#</th>
									<th style="width: 25%;">COLLEGE</th>
									<th style="width: 25%;">SCHOOL</th>
									<th style="width: 25%;">DATE CREATED</th>
									<th>OPTIONS</th>
								</tr>
							</thead>
							<h5>List of Colleges<h5>
						<div class="input-group" style="width:250px; position: absolute; right:0px; top:0px; margin-right:12px;">
								<input type="text" class="form-control form-control-sm" id="search_text" data-field="Search" placeholder="Search College name">
								<span class="input-group-btn">
									<button class="btn btn-sm btn-success" id="search" type="button"><i class="fa fa-search"></i></button>
								</span>
						</div>
						<tbody>
							<?php
							if(!empty($college)){ 
						        foreach ($college as $key => $value) {
						            ?>
						                <tr>
						                    <td><?=(@$key+1)?></td>
						                    <td><?=@$value->College?></td>
						                    <td><?=@$value->School?></td>
						                    <td><?=date("M d, Y", strtotime(@$value->Date_created))?></td>
						                    <td>
						                        <button class="btn btn-danger btn-sm delete" data-id="<?=@$value->ID?>"><i class="fa fa-trash"></i></button>
						                        <a class="btn btn-sm btn-primary" href="<?php echo base_url()?>category/category_profile/<?=@$value->ID?>"><i class="fa fa-pencil"></i></a>
						                        <!-- <button type="submit" class="btn btn-sm btn-primary" id="edit" value="<?=@$value->ID?>" data-toggle="modal"><i class="fa fa-pencil"></i></button> -->
						                    </td>
						                </tr>
						            <?php  
						        }        
						    }else{
						        ?>
						            <tr>
						                <td colspan="8">
						                    <div><center><h6 style="color:red">No Data Found.</h6></center></div>
						                </td>
						            </tr>
						        <?php 
						    }
						    ?>
						</tbody>
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