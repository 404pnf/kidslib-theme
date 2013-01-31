<li class="<?php print $fields['type']->content; ?>">

<?php 

    $bg_arr = ilearning_get_shuffle_array();
    $type = $fields['type']->content;
    $counter =  $fields['counter']->content;
	$rows = 15;
	$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 0;
	$counter = $counter - $rows * $page;
    $name = $fields['title']->content;
    $base_path =  base_path();
    $theme_path = path_to_theme();
    if ($type == "video"){
     	$output .= '<img src="';	
 		$output .= $base_path.$theme_path.'/images/tv_'.$bg_arr[$counter-1].'.png"/>'.$name;
    }else{  
    	$output .= '<img src="';
        $output .= $base_path.$theme_path.'/images/book_'.$bg_arr[$counter-1].'.png"/>'.$name;  
    }
   print $output;  
?>
<?php print $fields['ops']->content;?>
</li>
