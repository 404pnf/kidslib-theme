<link href="/sites/all/themes/ilearning/css/xin_jplayer.css" rel="stylesheet" type="text/css" />
<script src="/sites/all/themes/ilearning/booklet/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/sites/all/libraries/jplayer/jquery.jplayer.min.js" ></script> 
<script type="text/javascript" src="/sites/all/libraries/jplayermp3/jquery.jplayer.inspector.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	var mp3 = document.getElementById("xin_audio_player").href;
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



<div id="xin_image" class="repeat_bg">
 <?php print render($page['highlighted']); ?>
 <?php print $messages; ?>
 <?php print render($page['help']); ?>
 <?php print render($page['content']); ?>
</div>

<div class="link-wrapper">
  <?php
    //$account = menu_get_object('user');
    //print flag_create_link('xbz_favorites', $account->uid);
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
</div>
