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
<div class="top pngFix">
        <div class="top_login"><?php print $content['top_login']; ?></div>
        <div class="title"><?php print $content['title']; ?></div>
</div>
<!-- 	顶部结束	 -->
<!-- 	首页分类开始	 -->
<div class="main">
        <ul class="nav_classify fleft">
          <?php print $content['fleft']; ?>
        </ul>
        <ul class="nav_age fright">
          <?php print $content['fright']; ?>
        </ul>
</div>

<!-- 	首页分类结束	 -->
<div class="bottom"><div class="fltrp_logo fright"></div></div>

