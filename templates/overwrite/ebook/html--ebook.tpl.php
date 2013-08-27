<!DOCTYPE html>
<head>
    <?php //print $head; ?>
    <?php //<title><?php print $head_title; ?> <?php //</title> ?>
    <?php  //print $styles; ?>
<link href="/sites/all/themes/ilearning/booklet/jquery.booklet.1.4.0.css" type="text/css" rel="stylesheet" media="screen, projection, tv" />
<link href="/sites/all/themes/ilearning/css/ebook_jplayer.css" rel="stylesheet" type="text/css" />
</head>
<body id="ebook-read">
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  <?php //print $scripts; ?>
<script src="/sites/all/themes/ilearning/booklet/jquery.min.js" type="text/javascript"></script>
<script src="/sites/all/themes/ilearning/booklet/jquery-ui.min.js" type="text/javascript"></script>
<script src="/sites/all/libraries/jplayer/jquery.jplayer.min.js" type="text/javascript" ></script>
<script src="/sites/all/themes/ilearning/booklet/jquery-ui-1.8.21.custom.min.js" type="text/javascript"></script>
<script src="/sites/all/themes/ilearning/booklet/jquery.booklet.1.4.0.js" type="text/javascript"></script>
<script src="/sites/all/themes/ilearning/booklet/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="/sites/all/themes/ilearning/booklet/jquery.booklet.1.4.0.min.js" type="text/javascript"></script>
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
</body>
</html>
