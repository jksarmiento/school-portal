<?php
main_header(['curriculum']);
?>
<!-- ############ PAGE START-->
<div class="padding">
	<div class="p-a light-blue-700 It box-shadow">
		<div class="row">
			<div class="col-sm-12">
				<p class="m-b-0 _400"><i class="fa fa-book"></i> CURRICULUM</p>
			</div>
		</div>
	</div>
	<div id="pageMessages"></div>
	<div class='box p-a'>
		<div class="box box-body">
			<div class="b-b nav-active-bg">
				<div class="row">
                    <div class="col-sm-4">
                        <h2>Add To Curriculum</h2>
						<form>
                            <input type="hidden" id="id" value="<?=$curr_id?>" />
							<div class="form-group">
								<label for="year_level">Year Level</label>
								<input type="number" class="form-control" id="year_level" min="1" max="5" step="1" value="1" placeholder="Enter Year Level"/>
							</div>
							<div class="form-group">
								<label for="term">Term</label>
								<input type="number" class="form-control" id="term" min="1" max="3" step="1" value="1" placeholder="Enter Term"/>
							</div>
							<div class="form-group">
								<label for="subject">Subject</label>
								<select class="form-control" id="subject">
									<?php
									if (!empty($subject)) {
										foreach ($subject as $key => $value) {
										?>
											<option value="<?=$value->ID?>"><?=$value->Subject_code?> - <?=$value->Subject_name?></option>
										<?php
										}
									}
									?>
								</select>
							</div>
						</form>
						<button type="submit" class="btn btn-primary" id="curr_subj_save">Submit</button>
                    </div>
					<div class="col-sm-8">
						<h2><?=$curr_name->Curriculum_name?></h2>
                        <?php
                        if (!empty($terms)) {
                            foreach ($terms as $term_key => $term_value) {
                                ?>
                                <div class="box">
                                    <div class="box-header">
                                        <h2>Year <?=$term_value->Year_level?> Term <?=$term_value->Term?></h2>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered m-a-0">
                                            <thead>
                                                <tr>
                                                    <th style="width:5%">#</th>
                                                    <th style="width:10%">Code</th>
                                                    <th style="width:25%">Name</th>
                                                    <th style="width:50%">Description</th>
                                                    <th style="width:10%">Units</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $count = 1;
                                                foreach ($curriculum as $curr_key => $curr_value) {
                                                    if ($curr_value->Year_level == $term_value->Year_level && $curr_value->Term == $term_value->Term) {
                                                        ?>
                                                        <tr>
                                                            <td><?=$count?></td>
                                                            <td><?=$subjects[$curr_value->SubjectID]->Subject_code?></td>
                                                            <td><?=$subjects[$curr_value->SubjectID]->Subject_name?></td>
                                                            <td><?=$subjects[$curr_value->SubjectID]->Description?></td>
                                                            <td><?=$subjects[$curr_value->SubjectID]->Units?></td>
                                                        </tr>
                                                        <?php
                                                        $count++;
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        else {
                            ?>
                            <h4 class="danger">No available subjects.</h4>
                            <?php
                        }
                        ?>
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
<script src="<?php echo base_url() ?>/assets/js/curriculum/index.js"></script>