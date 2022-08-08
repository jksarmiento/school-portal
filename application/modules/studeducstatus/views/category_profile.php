<!-- <?php
main_header(['user']);
?>
<!-- ############ PAGE START-->
<div class="padding">
	<div class="p-a teal-A700 It box-shadow">
		<div class="row">
			<div class="col-sm-12">
				<p class="m-b-0 _400"><i class="fa fa-book"></i> EDIT CATEGORY</p>
			</div>
		</div>
	</div>
	<div id="pageMessages"></div>
	<div class='box p-a'>
		<div class="box box-body">
			<div class="b-b nav-active-bg">
				<div class="row">
					<div class="col-sm-4">
						<h2>Edit Category</h2>
						<form>
                            <input type="text" class="form-control" id="ID" value="<?=@$details->ID?>" hidden>

                            <div class="form-group">
                                <label for="category_name">Category Name</label>
                                <input type="text" class="form-control" id="category_name" value="<?=@$details->Category_name?>" placeholder="Enter Category Name">
                            </div>
						</form>
						<button type="submit" class="btn btn-primary" id="category_edit">Save edit</button>
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
<script src="<?php echo base_url() ?>/assets/js/category/index.js"></script> -->