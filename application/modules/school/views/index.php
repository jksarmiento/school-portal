<?php
main_header(['school']);
?>
<!-- ############ PAGE START-->
<div class="padding">
	<div class="p-a light-blue-700 It box-shadow">
		<div class="row">
			<div class="col-sm-12">
				<p class="m-b-0 _400"><i class="fas fa-school"></i> SCHOOL </p>
			</div>
		</div>
	</div>
	<div id="pageMessages"></div>
	<div class="box p-a">
		<div class="box box-body">
			<div class="b-b nav-active-bg">
				<div class="row">
					<div class="col-sm-4">
						<h2>Add School</h2>
						<form>
							<div class="form-group">
								<label for="School">School Name</label>
								<input type="text" class="form-control" id="School" placeholder="Enter School Name">
							</div>
							<div class="form-group">
								<label for="Level">Level:</label>
									<select class="form-control" id="Level" ui-jp="select2" ui-options="{theme: 'bootstrap'}">
									  <option value="Pre-School">Pre-School</option>
									  <option value="Elementary">Elementary</option>
									  <option value="Junior High">Junior High</option>
									  <option value="Senior High">Senior High</option>
									  <option value="College">College</option>
									</select>
							</div>
						</form>
						<button type="submit" class="btn btn-primary" id="school_save">Submit</button>
					</div>

					<div class="col-sm-8">
						<div class="table-responsive">
							<table ui-jp="dataTable" class="table table-striped b-t b-b">
								<thead>
									<tr>
										<th style="width: 5%;">#</th>
										<th style="width: 25%;">SCHOOL</th>
										<th style="width: 25%;">LEVEL</th>
										<th style="width: 25%;">DATE CREATED</th>
										<th>OPTIONS</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if(!empty($details)){ 
								        foreach ($details as $key => $value) {
								            ?>
								                <tr>
								                    <td><?=(@$key+1)?></td>
								                    <td><?=@$value->School?></td>
								                    <td><?=@$value->Level?></td>
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
<script src="<?php echo base_url() ?>/assets/js/school/index.js"></script>