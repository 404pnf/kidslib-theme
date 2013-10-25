<li>
<?php 
  $bg_arr = ilearning_get_shuffle_array();
  $type = $fields['type']->content;
	$rows = 15;
    $counter =  $fields['counter']->content;
	$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 0;
	$counter = $counter - $rows * $page;
    $name = $fields['field_xin_unit_number']->content;
    $base_path =  base_path();
    $theme_path = path_to_theme();
    if ($type == "xinbiaozhun"){
    	$output .= '<img src="';
        $output .= $base_path.$theme_path.'/images/book_'.$bg_arr[$counter-1].'.png"/>'.$name;
    }
   print $output;  
?>
 <div class="big_image"><?php print $fields['field_xin_unit_number']->content; ?></div>
</li>
