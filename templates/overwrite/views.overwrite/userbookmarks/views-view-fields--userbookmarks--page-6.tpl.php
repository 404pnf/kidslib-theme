<script language="javascript" type="text/javascript"> 
 function ShowDialog_da(url) {
           var iWidth=1200; //窗口宽度
           var iHeight=window.screen.height-120;//窗口高度
           var iTop=0;
           var iLeft=(window.screen.width-iWidth)/2;
           window.open(url,"Detail","Scrollbars=no,Toolbar=no,Location=no,Direction=no,Resizeable=no,Width="+iWidth+" ,Height="+iHeight+",top="+iTop+",left="+iLeft);
          }
 </script>
 
 
<li class="<?php print arg(3); ?>">
 <div class="big_image">
  <span class="ebook_name">
 <?php print $fields['field_xin_unit_number']->content.' '.$fields['field_xin_unit_name']->content; ?>
  </span>
 </div>
<?php 

    $bg_arr = ilearning_get_shuffle_array();
    $type = arg(3);   
    $counter =  $fields['counter']->content;
	$rows = 15;
	$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 0;
	$counter = $counter - $rows * $page;
	
	$nid = $fields['nid']->content;
	$name = '<span class="ebook_name">';
    $name .='<a onclick=ShowDialog_da("/xin/image/';
    $name .=$nid.'");>';
    $name .=$fields['field_xin_unit_number']->content.' '.$fields['field_xin_unit_name']->content;
    $name .= '</a>';
    $name .= '</span>';
    $base_path =  base_path();
    $theme_path = path_to_theme();
    if ($type == "kw"){
     	$output .= '<img src="';
        $output .= $base_path.$theme_path.'/images/book_'.$bg_arr[$counter-1].'.png"/>'.$name;
    }
    print $output;  
?>
<?php print $fields['ops']->content;?>
</li>