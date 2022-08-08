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
						<h2>Add Subject</h2>
						<form>
							<div class="form-group"> 	
								<label for="Subject_code">Subject Code</label>
								<input type="text" class="form-control" id="Subject_code" placeholder="Enter Subject Code">
								<br>
								<label for="Subject_name">Subject Name</label>
								<input type="text" class="form-control" id="Subject_name" placeholder="Enter Subject Name">
								<br>
								<label>Units</label>
								<input type="number" class="form-control" id="Units" placeholder="Enter Units">
								<br>
								<label style="font-size: 17px;">Description
								<textarea class="form-control" rows="2" cols="25" placeholder="This is the default text" id="Description"></textarea>
							</div>
						</form>
						<button type="submit" class="btn btn-primary" id="subject_save">Submit</button>
					</div>

					<div class="col-sm-8">
						<table class="table border-in-table table-hover table-sm">
							<thead>
								<tr>
									<th style="width: 5%;">#</th>
									<th style="width: 25%;">SUBJECT CODE</th>
									<th style="width: 25%;">SUBJECT NAME</th>
									<th style="width: 25%;">UNITS</th>
									<th style="width: 25%;">DESCRIPTION</th>
									<th style="width: 25%;">DATE CREATED</th>
									<th>OPTIONS</th>
								</tr>
							</thead>
							<h5>List of Subjects<h5>
						<div class="input-group" style="width:250px; position: absolute; right:0px; top:0px; margin-right:12px;">
								<input type="text" class="form-control form-control-sm" id="search_text" data-field="Search" placeholder="Search Subject name">
								<span class="input-group-btn">
									<button class="btn btn-sm btn-success" id="search" type="button"><i class="fa fa-search"></i></button>
								</span>
						</div>
						<tbody>
							<?php
							if(!empty($subject)){ 
						        foreach ($subject as $key => $value) {
						            ?>
						                <tr>
						                    <td><?=(@$key+1)?></td>
						                    <td><?=@$value->Subject_code?></td>
						                    <td><?=@$value->Subject_name?></td>
						                    <td><?=@$value->Units?></td>
						                    <td><?=@$value->Description?></td>
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
<script src="<?php echo base_url() ?>/assets/js/subject/index.js"></script>