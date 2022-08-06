<?php
    $ci = & get_instance();
    if(!empty($details)){ 
            ?>
            <option>Select Course</option>
            <?php
            foreach ($details as $key => $value){
                ?>
                <option value="<?=@$value->ID?>" <?=@$value->ID == @$subject->CourseID ? "selected" : "" ?>><?=@$value->Course_name?></option>
                <?php
            }    
    }else{
        ?>
        <option>No Course Available</option>
        <?php
    }
?>