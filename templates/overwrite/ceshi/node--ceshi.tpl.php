<link href="/sites/all/themes/ilearning/jplayer/prettify-jPlayer.css" rel="stylesheet" type="text/css" />
<link href="/sites/all/themes/ilearning/jplayer/jplayer.pink.flag.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="/sites/all/libraries/jplayermp3/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="/sites/all/libraries/jplayermp3/jquery.jplayer.inspector.js"></script>
<script type="text/javascript" src="/sites/all/libraries/jplayermp3/themeswitcher.js"></script>
<script type="text/javascript" src="/sites/all/themes/ilearning/js/hiddenShow.js"></script>
<script type="text/javascript">
	function onclick_right(a){
		for(var i = 1; i <= 4; i++){
			document.getElementById("ceshi_an_word_"+i).className="u_bg"
			}
		var an = document.getElementById("answer");
		var an_word = document.getElementById("answer_word");

		a.className="s_bg";
		an.className="answer_right answer fleft";
		an_word.className="answer_word_r answer_word fleft";
	}
	function onclick_wrong(b){
		for(var i = 1; i <= 4; i++){
			document.getElementById("ceshi_an_word_"+i).className="u_bg"
			}
		var an = document.getElementById("answer");
		var an_word = document.getElementById("answer_word");

		b.className="s_bg";
		an.className="answer_wrong answer fleft";
		an_word.className="answer_word_w answer_word fleft";
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
	</div>
	<div class="title">
        <a class="font_DFHaibaoW12 title_left">测一测</a>
		<a class="title_name font_DFHaibaoW12">
		    <?php //显示测试节点的题目
		         $unit =  views_embed_view("xinimage","unit",$node->nid);
		         print $unit;
		     ?>
		 </a>
	</div>
</div>

<div id="node-<?php print $node->nid; ?>"
	class="<?php print $classes; ?> clearfix" <?php print $attributes; ?>>

  <div class="content clearfix" <?php print $content_attributes; ?>>

    <div class="fleft">
    	<div class="word_box">
			<ul id="word_list_a">
				<?php // 选项区，有4个选项
					for ($i = 0; $i <= 3; $i++) {
						$word = $node->field_xuanxiang['und'][$i]['value'];
						$len = strlen($word);
						if( $len >= 10 && $len <= 16 ) {
							print "<li class='toolong'><a id='ceshi_an_word_$i' onclick='onclick_right(this);' href='#'>$word</a></li>";
							}
						else {
							print "<li><a id='ceshi_an_word_$i' onclick='onclick_right(this);' href='#'>$word</a></li>";
						}
					}
				?>
       		 </ul>
		</div>
		<! -- 播放器区 -->
		<div class="op_box">
			<div class="oh">
				<div id="jquery_jplayer_1" class="jp-jplayer"></div>

				<div id="jp_container_1" class="jp-audio">
					<div class="jp-type-single">
						<div class="jp-gui jp-interface">
							<ul class="jp-controls">
								<li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
								<li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
								<li><a href="javascript:;" class="jp-mute" tabindex="1"
									title="mute">mute</a></li>
								<li><a href="javascript:;" class="jp-unmute" tabindex="1"
									title="unmute">unmute</a></li>
							</ul>
							<div class="jp-volume-bar">
								<div class="jp-volume-bar-value"></div>
							</div>
						</div>
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
                print "<a id='audio_player' href='$audio_url'></a>"
            ?>
       </div>
			<div class="fclear oh">
				<?php
							 $newer = node_sibling_nse($node,'next',NULL,NULL,NULL);
							 $older = node_sibling_nse($node,'prev',NULL,NULL,NULL);

							 if (!empty ($older)){
								print "<a class='pre font_mrosoftYHB fleft' href='$older'>上一题</a>";
								}
							 if (!empty($newer)){
								print "<a class='pre font_mrosoftYHB fleft' href='$newer'>下一题</a>";
							 }
				 ?>
        	</div>
	 </div>
    </div>
	<div class="question fleft">
    <?php  print render($content['field_answer_image']); ?>
    </div>
	<div id="answer" class="answer fleft">
	</div>
	<div id="answer_word" class="answer_word  fleft">
	</div>
	</div>
</div>

<div class="bottom">
	<div class="fltrp_logo fright"></div>
</div>

