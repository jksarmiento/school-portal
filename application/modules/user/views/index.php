<?php
main_header(['user']);
?>
<!-- ############ PAGE START-->
<div class="padding">
	<div class="p-a light-blue-700 It box-shadow">
		<div class="row">
			<div class="col-sm-12">
				<p class="m-b-0 _400"><i class="material-icons" style="font-size:medium">people</i> USERS </p>
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
							<div class="form-group">
								<label for="fname">First Name</label>
								<input type="text" class="form-control" id="fname" placeholder="Enter First Name">
							</div>
							<div class="form-group">
								<label for="lname">Last Name</label>
								<input type="text" class="form-control" id="lname" placeholder="Enter Last Name">
							</div>
							<div class="form-group">
								<label for="user_type">User Type</label>
								<input type="text" class="form-control" id="user_type" placeholder="Enter User Type">
							</div>
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" class="form-control" id="username" placeholder="Enter Username">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" placeholder="Enter Password">
							</div>
						</form>
						<button type="submit" class="btn btn-primary" id="user_save">Submit</button>
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
<script src="<?php echo base_url() ?>/assets/js/user/index.js"></script>