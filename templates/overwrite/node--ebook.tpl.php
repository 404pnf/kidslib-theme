<script src="/sites/all/themes/ilearning/booklet/jquery.min.js" type="text/javascript"></script>
<script src="/sites/all/themes/ilearning/booklet/jquery-ui.min.js" type="text/javascript"></script>
<script src="/sites/all/libraries/jplayer/jquery.jplayer.min.js" type="text/javascript" ></script> 
<script src="/sites/all/themes/ilearning/booklet/jquery-ui-1.8.21.custom.min.js" type="text/javascript"></script>
<script src="/sites/all/themes/ilearning/booklet/jquery.booklet.1.4.0.js" type="text/javascript"></script>
<script src="/sites/all/themes/ilearning/booklet/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="/sites/all/themes/ilearning/booklet/jquery.booklet.1.4.0.min.js" type="text/javascript"></script>
<link href="/sites/all/themes/ilearning/booklet/jquery.booklet.1.4.0.css" type="text/css" rel="stylesheet" media="screen, projection, tv" />
<link href="/sites/all/themes/ilearning/css/ebook_jplayer.css" rel="stylesheet" type="text/css" />
<script src="/sites/all/themes/ilearning/js/jplayer_book.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	var arr = $("#imgsize").html();
	var bookSize = eval(arr);
	var bookletHeight = 530*bookSize[1]/bookSize[0];
  //single book
    $('#ebook-wrapper').booklet({
	width:  1060,
	height: bookletHeight,
	pageNumbers: false,
	arrows: true,
	closed: true,
	autoCenter: true,
	pagePadding: 0,
    change: function(event, data) {
          changeAudioUrl(data.index);
          } 				
   });
	

});

$(document).ready(function(){

	$("#jquery_jplayer_1").jPlayer({
		swfPath: "/sites/all/libraries/jplayermp3/Jplayer.swf",
		supplied: "mp3",
		wmode: "window"
	});

	
});

</script>




<div id="node-<?php print $node->nid; ?>"
	class="<?php print $classes; ?> clearfix" <?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2 <?php print $title_attributes; ?>>
		<a href="<?php print $node_url; ?>"><?php print $title; ?></a>
	</h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <div class="meta submitted">
      <?php print $user_picture; ?>
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>


  <div id="ebook-wrapper">
     
    <?php
      // We hide the comments and links now so that we can render them later. 
      hide($content['comments']);
      hide($content['links']);
      //print render($content);
     
 
      $page_counter = count($node->field_page_content['und']);
      //print $page_counter;
      $new_page_counter = $page_counter-1;
      
    ?>
    
   <?php
       
           
           global $base_url;
           $arr=array();      
           $arrimg = array(); 
           
           //pager_counter为计算的总页数
           for($item_count=0;$item_count < $page_counter;$item_count++){ 

            foreach($content['field_page_content'][$item_count]['entity']['field_collection_item'] as $field_collection_item)  {
              print '<div class="ebook_content">';  
            	 $ebook_image = '<span class= "ebook_image">';
            	 $ebook_url = render($field_collection_item['field_page_image']);
            	 $ebook_image .= '<img src='.$ebook_url.' width=530px />';
            	 $ebook_image .= '</span>';
            
            	 print $ebook_image;
                 $pnumber = render($field_collection_item['field_page_number']);
                              
                 
                 //if (!empty ($field_collection_item['field_page_audio'])){   
                 $ebook_audio = render($field_collection_item['field_page_audio']);
                             
                     //print '<span class="ebook_audio">';                             	      	
                     //print render($field_collection_item['field_page_audio']);    
                     //print  '</span>';
                 $ebooksize =  getimagesize(render($field_collection_item['field_page_image']));
                 //追进页码和音频到空数组中
                 array_push($arr,$pnumber,$ebook_audio);
            }
           
           
         $pnumber = $pnumber-1;  
         if($pnumber != 0){   
           if ($pnumber%2==0){
           	$new_pager = '<div class="right_pager">';
           	$new_pager .= ''.$pnumber.' / '.$new_page_counter.'';
           	$new_pager .= '</div>';       
           }else{
           	$new_pager = '<div class="left_pager">';
           	$new_pager .= ''.$pnumber.' / '.$new_page_counter.'';
           	$new_pager  .= '</div>';
           }
         }else{
         	$new_pager = '';
         }  
           print $new_pager;  
        
        print '</div>';
        }
           //每张图片的具体长度和宽度
         

          
           
        
        


          
           
    ?>
  
  </div>
 
  <?php
    // Remove the "Add new comment" link on the teaser page or if the comment
    // form is being displayed on the same page.
    if ($teaser || !empty($content['comments']['comment_form'])) {
      unset($content['links']['comment']['#links']['comment-add']);
    }
    // Only display the wrapper div if there are links.
    $links = render($content['links']);
    if ($links):
  ?>
    <div class="link-wrapper">
      <?php print $links; ?>
      <?php
           array_push($arrimg,$ebooksize[0],$ebooksize[1]);
           $outputimg = '<div id="imgsize"style="display:none">';
           $outputimg .= json_encode($arrimg);
           $outputimg .='</div>';
           echo $outputimg;
      
           $outputjs = '<div id="audio_data" style="display:none">';
           $outputjs .= '<div id="audio_path">'; 
           //$outputjs .= 'http://ilearning.cn/sites/default/files/ebook/pageaudio/';
           $outputjs .= $base_url.'/sites/default/files/ebook/pageaudio/';          
           $outputjs .= '</div>';
           $outputjs .= '<div id="audio_name">';
           //$outputjs .=json_encode(str_replace('http://ilearning.cn/sites/default/files/ebook/pageaudio/','',$arr));           
           $outputjs .=json_encode(str_replace($base_url.'/sites/default/files/ebook/pageaudio/','',$arr));
           $outputjs .= '</div>';
           $outputjs .='</div>';
           echo  $outputjs;
       ?>
      <div id="jquery_jplayer_1" class="jp-jplayer"></div>

		<div id="jp_container_1" class="jp-audio">
			<div class="jp-type-single">
				<div class="jp-gui jp-interface">
					<ul class="jp-controls">
						<li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
						<li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
						<li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
						<li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
						<li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
					</ul>
					<div class="jp-progress">
						<div class="jp-seek-bar">
							<div class="jp-play-bar"></div>
						</div>
					</div>
					
					<div class="jp-volume-bar">
						<div class="jp-volume-bar-value"></div>
					</div>
					
					<div class="jp-time-holder">
						<div class="jp-current-time"></div>
						<div class="jp-duration"></div>
					</div>
				</div>
			</div>
		</div>
      
    </div>
   
  <?php endif; ?>

  <?php print render($content['comments']); ?>
  
</div>
