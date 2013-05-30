<script src="/sites/all/themes/ilearning/js/hiddenShow.js" type="text/javascript"></script>
<link href="/sites/all/themes/ilearning/css/bookshelf.css" rel="stylesheet" type="text/css" />



<script type="text/javascript">

(function ($) {
	$(document).bind('flagGlobalAfterLinkUpdate', function(event, data) {
		
	  if (data.flagName == 'tingerge' && data.flagStatus == 'unflagged') {
		  
	    if ($(data.link).parents('.teg').size()) { // Are we inside the view?		    
	    	$(data.link).parents('.teg').hide('slow');
	   }
	   // if ($(data.link).parents('.video').size()) { // Are we inside the view?		    
//	    	$(data.link).parents('.video').hide('slow');
//	   }
	  }
	});

	})(jQuery);
</script>


<div class="bookmarks">	
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
			
			<a href="/front" class="home font_mrosoftYHB fleft">主页</a>
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
		    <li><a href="/user/<?php print $user->uid; ?>/bookmarks/">我的收藏</a></li>
		  <?php 
		      //判断新标准听儿歌是否为空,为空则不显示.
		      $total_numbers =  views_get_view_result('userbookmarks','block_2');
		      $numbers= count($total_numbers);
	   
		      if($numbers==0){
		   		
		      }else{
		   	      print '<li><a class="top_nav_s" style="margin-left: 0">听儿歌</a></li>';
		      }   
		   ?> 

		   <?php		   
		      //判断新标准看动画是否为空,为空则不显示.
		      $total_numbers =  views_get_view_result('userbookmarks','block_1');
              $numbers= count($total_numbers);

		      if($numbers==0){
		 
		      }else{ 	
		             $output='<li><a href="/user/';
                     $output.= $user->uid.'/bookmarks/kdh">看动画</a></li>';
                     print $output;
		      }  		      
		   ?>
           
           <?php 
		      //判断新标准做游戏是否为空
		      $total_numbers =  views_get_view_result('userbookmarks','block_3');
		      $numbers= count($total_numbers);
	   
		      if($numbers==0){
		   		
		      }else{
		   	       $output='<li><a href="/user/';
		   	       $output.= $user->uid.'/bookmarks/zyx">做游戏</a></li>';
		   	       print $output; 
		      }   
		   ?> 
         
           <?php 
		      //判断新标准看一看是否为空
		      $total_numbers =  views_get_view_result('userbookmarks','block_4');
		      $numbers= count($total_numbers);
	   
		      if($numbers==0){
		   		
		      }else{
		   	       $output='<li><a href="/user/';
		   	       $output.= $user->uid.'/bookmarks/kan">看一看</a></li>';
		   	       print $output; 
		      }   
		   ?> 

		   
		   <?php 
		      //判断学课文是否为空
		      $total_numbers =  views_get_view_result('userbookmarks','block_5');
		      $numbers= count($total_numbers);
	   
		      if($numbers==0){
		   		
		      }else{
		   	       $output='<li><a href="/user/';
		   	       $output.= $user->uid.'/bookmarks/kw">学课文</a></li>';
		   	       print $output; 
		      }   
		   ?> 
		</ul>
	</div>
  <ul class="book_list">
  <?php if ($rows): ?>
      <?php print $rows; ?>
  <?php elseif ($empty): ?>
      <?php print $empty; ?>
  <?php endif; ?>

  <?php if ($pager): ?>
    <?php print $pager; ?>
  <?php endif; ?>
  </ul>

</div><?php /* class view */ ?>
