<?php
/**
 * @file
 * Template for a 2 column panel layout.
 *
 * This template provides a two column panel display layout, with
 * each column roughly equal in width.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['left']: Content in the left column.
 *   - $content['right']: Content in the right column.
 */
?>
<!-- 	顶部开始	 -->
<div class="top pngFix">
	<div class="top pngFix">
		<div class="top_login">
          <?php print $content['top_login']; ?>     
         </div>
		<div class="title"><?php print $content['title']; ?>  </div>
	</div>
	<div class="title">
		<img
			src="<?php print base_path().path_to_theme(); ?>/images/title.png"
			class="title eshow pngFix" />
	</div>
</div>
<!-- 	顶部结束	 -->
<!-- 	书架开始	 -->
<div class="left_classitfy left_bookshelf fleft">
    <?php print $content['left_bookshelf']; ?>
    <img
		src="<?php print base_path().path_to_theme(); ?>/images/bookshelf_left.png"
		class="left_classitfy_img" />
</div>
<div class="bookshelf_main_bg fleft">
	<!--top list -->
	<div class="top_bookshelf">
      <?php print $content['top_bookshelf']; ?>
    </div>
	<!--top list end-->
	<!--book list-->
	<ul class="book_list">
<?php print $content['book_list']; ?>
    </ul>
	<!--book list end-->
</div>

<div class="classify_name"><?php print $content['classify_name']; ?></div>
<!-- 	书架结束	 -->
<div class="bottom">
	<div class="fltrp_logo fright"></div>
</div>
