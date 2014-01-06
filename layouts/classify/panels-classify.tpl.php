<div class="book_classify">
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
	<ul id="list" class="book_list">
<?php print $content['book_list']; ?>
    </ul>
	  <!-- 翻页区块 -->
    <div class="page fclear"> 
    <span id="theFirstPage" ><a href="javascript:firstPage()">第一页</a></span>
    <span id="thePrePage"><a href="javascript:prePage()">上一页</a></span>
    <span id="theNextPage"><a href="javascript:nextPage()">下一页</a></span>
    <span id="theLastPage"><a href="javascript:lastPage()">最后一页</a></span>
    <span id="page_pageTotal"></span>
    </div>
	<!--book list end-->
</div>

<div class="classify_name"><?php print $content['classify_name']; ?></div>
<!-- 	书架结束	 -->
<div class="bottom">
	<div class="fltrp_logo fright"></div>
</div>

</div>
