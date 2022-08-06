<?php
    $ci = & get_instance();
    if(!empty($details)){ 
            ?>
            <option>Select School</option>
            <?php
            foreach ($details as $key => $value){
                ?>
                <option value="<?=@$value->ID?>" <?=@$value->ID == @$college->SchoolId ? "selected" : "" ?>><?=@$value->School?></option>
                <?php
            }    
    }else{
        ?>
        <option>No School Available</option>
        <?php
    }
?>