<?php
	if(!empty($node) && $node->type == 'video'){
	  include('overwrite/page--video.tpl.php');
	   return;
	}

	if(!empty($node) && $node->type == 'ceshi'){
	  include('overwrite/page--ceshi.tpl.php');
	  return;
	}

	if(!empty($node) && $node->type == 'ebook'){
	  include('overwrite/page--ebook.tpl.php');
	  return;
	}

	if(!empty($node) && $node->type == 'book'){
	  include('overwrite/page--book.tpl.php');
	  return;
	}
?>

<div class="wrapper">
 <?php print render($page['highlighted']); ?>
 <?php print $messages; ?>
 <?php print render($page['help']); ?>
 <?php print render($page['content']); ?>
</div>
