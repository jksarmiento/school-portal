<?php
    $ci = & get_instance();
    if(!empty($details)){ 
            ?>
            <option>Select Department</option>
            <?php
            foreach ($details as $key => $value){
                ?>
                <option value="<?=@$value->ID?>" <?=@$value->ID == @$course->DepartmentID ? "selected" : "" ?>><?=@$value->Department?></option>
                <?php
            }    
    }else{
        ?>
        <option>No Department Available</option>
        <?php
    }
?>