<li class="<?php print $fields['type']->content; ?>">
  <div class="big_image"><?php print $fields['title']->content; ?></div>
<?php 
  $bg_arr = ilearning_get_shuffle_array();
  $type = $fields['type']->content;
	$rows = 15;
  //$counter =  $fields['counter']->content % $rows;
  $counter =  ($fields['counter']->content % $rows ) + 1;
  //print $counter;
	$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 0;
	$counter = $counter - $rows * $page;
    $name = $fields['title']->content;
    //$base_path =  base_path();
    $base_path =  base_path();
    $theme_path = path_to_theme();
    if ($type == "video"){
	    $result = views_embed_view('get_video_vid', 'default', $fields['nid']->content);
      $video_id = trim(strip_tags($result));
		  $name = trim(strip_tags($name));
		  $name = '<span>' .l($name, 'video/html/' . $video_id . '.html') .'</span>';
     	$output .= '<img src="';	
 		  $output .= $base_path.$theme_path.'/images/tv_'.$bg_arr[$counter-1].'.png"/>'.$name;
    }
	elseif ($type == "book"){
	    $result = views_embed_view('get_book_id', 'default', $fields['nid']->content);
      $book_id = trim(strip_tags($result));
      //print $fields['nid']->content;
      //print $book_id;
		  $name = trim(strip_tags($name));
		  $name = '<span>' .l($name, 'bilingual/' . $book_id . '.html') .'</span>';
     	$output .= '<img src="';	
 		  $output .= $base_path.$theme_path.'/images/book_'.$bg_arr[$counter-1].'.png"/>'.$name;
    }
	elseif ($type == "ebook"){
	    $result = views_embed_view('get_ebook_id', 'default', $fields['nid']->content);
      $ebook_id = trim(strip_tags($result));
		  $name = trim(strip_tags($name));
		  $name = '<span>' .l($name, 'ebook/html/' . $ebook_id . '.html') .'</span>';
      //print $ebook_id;
     	$output .= '<img src="';	
 		  $output .= $base_path.$theme_path.'/images/book_'.$bg_arr[$counter-1].'.png"/>'.$name;
    }
	elseif ($type == "xinbiaozhun"){
	    $result = views_embed_view('get_xbz_id', 'default', $fields['nid']->content);
      $xbz_id = trim(strip_tags($result));
		  $name = trim(strip_tags($name));
		  $name = '<span>' .l($name, 'xbz/html/' . $xbz_id . '.html') .'</span>';
      //print $xbz_id;
     	$output .= '<img src="';	
 		  $output .= $base_path.$theme_path.'/images/book_'.$bg_arr[$counter-1].'.png"/>'.$name;
    }
	else {  
    	$output .= '<img src="';
        $output .= $base_path.$theme_path.'/images/book_'.$bg_arr[$counter-1].'.png"/>'.$name;  
    }
   print $output;  
?>
</li>
