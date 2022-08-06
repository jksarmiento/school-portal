<?php
    $ci = & get_instance();
    if(!empty($details)){ 
            ?>
            <option>Select College</option>
            <?php
            foreach ($details as $key => $value){
                ?>
                <option value="<?=@$value->ID?>" <?=@$value->ID == @$department->CollegeID ? "selected" : "" ?>><?=@$value->College?></option>
                <?php
            }    
    }else{
        ?>
        <option>No College Available</option>
        <?php
    }
?>