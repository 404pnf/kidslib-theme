
<link href="/sites/all/themes/ilearning/jplayer/prettify-jPlayer.css" rel="stylesheet" type="text/css" />
<link href="/sites/all/themes/ilearning/jplayer/jplayer.pink.flag.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="/sites/all/libraries/jplayermp3/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="/sites/all/libraries/jplayermp3/jquery.jplayer.inspector.js"></script>
<script type="text/javascript" src="/sites/all/libraries/jplayermp3/themeswitcher.js"></script>
<script type="text/javascript" src="/sites/all/themes/ilearning/js/hiddenShow.js"></script>
<script type="text/javascript">
function onclick_right(){ 
    var an = document.getElementById("answer");
    an.className="answer_right answer fleft";

	
}
function onclick_wrong(){ 
    var an = document.getElementById("answer");
    an.className="answer_wrong answer fleft";

	
}
</script>


<script type="text/javascript">

$(document).ready(function(){
	var mp3 = document.getElementById("audio_player").href;
	$("#jquery_jplayer_1").jPlayer({
		ready: function () {
			$(this).jPlayer("setMedia", {
				mp3:mp3
			}).jPlayer("play"); ;
		},
		swfPath: "/sites/all/libraries/jplayermp3/Jplayer.swf",
		supplied: "mp3",
		wmode: "window"
	});

	$("#jplayer_inspector").jPlayerInspector({jPlayer:$("#jquery_jplayer_1")});
});
</script>

<div class="top pngFix">
	<div class="top_login">
		<div class=" fright user_name" onMouseMove="userShow();"
			onMouseOut="userHidden();">
			<a href="#" class="fleft font_mrosoftYHB"> <img
				src="/sites/all/themes/ilearning/images/user-img.jpg">
				<?php  
				       print $user->name;
				   ?>
			</a>

			<ul class="user_nav fright fclear" id="user_name">

				<li><a href="/user/<?php print $user->uid; ?>/bookmarks">我的收藏</a></li>
				<li><a href="/user/logout">退出</a></li>
			</ul>
		</div>
	</div>
	
	<div class="title">

		<a class="title_name font_DFHaibaoW12" href="#">
		 <?php 
		         $unit =  views_embed_view("xinimage","unit",$node->nid);
		         print $unit;
		     ?>
		</a>
	</div>
</div>

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

  <div class="content clearfix" <?php print $content_attributes; ?>>
   
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      //print render($content);
     
    ?>
       <div class="word_box fleft">
			<ul>
        <?php 
          
           $answer0 .='<li><a onclick="onclick_right();" href="#">'.$node->field_xuanxiang['und'][0]['value'].'</a></li>';
           $answer1 .='<li><a onclick="onclick_wrong();" href="#">'.$node->field_xuanxiang['und'][1]['value'].'</a></li>';            
           $answer2 .='<li><a onclick="onclick_wrong();" href="#">'.$node->field_xuanxiang['und'][2]['value'].'</a></li>';
           //判断第四个答案是否为空，为空则不输出任何东西
           if (!empty($node->field_xuanxiang['und'][3]['value'])){
                    $answer3 .='<li><a onclick="onclick_wrong();" href="#">'.$node->field_xuanxiang['und'][3]['value'].'</a></li>';                    
           }
           $arr=array($answer0,$answer1,$answer2,$answer3);           
           shuffle($arr);
           //print_r ($arr);
           foreach ($arr as $output){
           	echo $output;
           }
                      
         ?> 
        </ul>
		</div>


		<div class="question fleft">   
    <?php  print render($content['field_answer_image']); ?>
    </div>
		<div id="answer" class="answer fleft"></div>
		<div class="op_box fleft">
			<div class="oh">
				<div id="jquery_jplayer_1" class="jp-jplayer"></div>

				<div id="jp_container_1" class="jp-audio">
					<div class="jp-type-single">
						<div class="jp-gui jp-interface">
							<ul class="jp-controls">
								<li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
								<li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
								<!--<li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>-->
								<li><a href="javascript:;" class="jp-mute" tabindex="1"
									title="mute">mute</a></li>
								<li><a href="javascript:;" class="jp-unmute" tabindex="1"
									title="unmute">unmute</a></li>
								<li><a href="javascript:;" class="jp-volume-max" tabindex="1"
									title="max volume">max volume</a></li>
							</ul>
							<!--<div class="jp-progress">
								<div class="jp-seek-bar">
									<div class="jp-play-bar"></div>

								</div>
							</div>-->
							<div class="jp-volume-bar">
								<div class="jp-volume-bar-value"></div>
							</div>
							<!--<div class="jp-current-time"></div>
							<div class="jp-duration"></div>
							<ul class="jp-toggles">
								<li><a href="javascript:;" class="jp-repeat" tabindex="1"
									title="repeat">repeat</a></li>
								<li><a href="javascript:;" class="jp-repeat-off" tabindex="1"
									title="repeat off">repeat off</a></li>
							</ul>-->
						</div>
						<!--<div class="jp-title">
							<ul>
								<li>Cro Magnon Man</li>
							</ul>
						</div>-->
						<div class="jp-no-solution">
							<span>Update Required</span> To play the media you will need to
							either update your browser to a recent version or update your <a
								href="http://get.adobe.com/flashplayer/" target="_blank">Flash
								plugin</a>.
						</div>
					</div>
				</div>
           <?php
			    $audio_url = file_create_url ( $node->field_ceshi_audio ['und'] [0] ['uri'] );
                $audio_name = $node->field_ceshi_audio['und'][0]['filename'];
                $audio_mp3 .="<a id='audio_player' href="."$audio_url"."></a>";      
                print  $audio_mp3;               
            ?>
                       
       </div>
			<div class="fclear oh">
			  
        <?php
            
                   
                     $older = node_sibling($node,'prev',NULL,NULL,NULL); 
                     $newer = node_sibling($node,'next',NULL,NULL,NULL);
                     if (!empty ($older)){                 
                        $output_older ="<a class='pre font_mrosoftYHB fleft' href="."$older".">".上一题."</a>";
                        
                     }
                     print $output_older;
                     if (!empty($newer)){
                        $output_newer ="<a class='next font_mrosoftYHB fleft' href="."$newer".">".下一题."</a>";
                       
                    }
                    print $output_newer;
               
         ?>
        </div>

		</div>


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
    </div>
  <?php endif; ?>

  <?php print render($content['comments']); ?>

</div>

<div class="bottom">
	<div class="fltrp_logo fright"></div>
</div>

