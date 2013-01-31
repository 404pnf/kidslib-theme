<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *<img src="<?php print base_path().path_to_theme(); ?>/images/book_0<?php print $fields['counter']->content; ?>.png" /><?php print $fields['title']->content;?>
 * @ingroup views_templates
 */
?>
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


</li>
