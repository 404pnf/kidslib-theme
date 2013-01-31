<script src="/sites/all/themes/ilearning/js/hiddenShow.js" type="text/javascript"></script>
<link href="/sites/all/themes/ilearning/css/bookshelf.css" rel="stylesheet" type="text/css" />
	
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
		<div class="title_left">
			<a href="#" class="back font_mrosoftYHB fleft">返回</a><a href="#"
				class="home font_mrosoftYHB fleft">主页</a>
		</div>
		<img src="/sites/all/themes/ilearning/images/title.png"
			class="title eshow pngFix" />
	</div>
</div>
<div class="title">
	<img src="/sites/all/themes/ilearning/images/title.png"
		class="title eshow pngFix" />
</div>

<div class="left_bookshelf fleft"></div>

<div class="bookshelf_main_bg_1 bookshelf_main_bg fleft">
	<div class="top_bookshelf">
		<ul>
			<li><a class="top_nav_s" style="margin-left: 0">我的收藏</a></li>
		</ul>
	</div>
  <ul class="book_list">
  <?php if ($rows): ?>
      <?php print $rows; ?>
  <?php elseif ($empty): ?>
      <?php print $empty; ?>
  <?php endif; ?>
  </ul>
  <?php if ($pager): ?>
    <?php print $pager; ?>
  <?php endif; ?>


</div><?php /* class view */ ?>
