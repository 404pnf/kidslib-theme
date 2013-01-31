<script type="text/javascript" src="/sites/all/themes/ilearning/js/hiddenShow.js"></script>

<script language="javascript" type="text/javascript">
 function ShowDialog(url,w,h) {
           var iWidth=w; //窗口宽度
           var iHeight=h;//窗口高度
           var iTop=(window.screen.height-iHeight)/2;
           var iLeft=(window.screen.width-iWidth)/2;
           window.open(url,"Detail","Scrollbars=no,Toolbar=no,Location=no,Direction=no,Resizeable=no,Width="+iWidth+" ,Height="+iHeight+",top="+iTop+",left="+iLeft);
          }
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
	.

	<div class="title">
		<div class="title_left">
		  <a href="<?php   
                       $age= $node->field_age['und'][0]['tid'];
                       $category = $node->field_category['und'][0]['tid'];
		               $output = '/ebooklist/category/'.$category.'/'.$age;
		               print $output;
		            ?>" class="back font_mrosoftYHB fleft">返回</a>
		  <a href="/front" class="home font_mrosoftYHB fleft">主页</a>
		</div>
		  <a class="title_name font_DFHaibaoW12">
		        <?php
		           print  ($node->field_xin_unit_number['und'][0]['value']);
                 ?>  
          </a>
	</div>
	

</div>


<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>


  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>>
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
  

  
  <div class="unit_bg">
 
        
  
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      //print render($content);
      //print render($content['field_xin_kewen']);
    ?>

      
  
   <ul class="unit_nav_classify">
    <li>
   <?php      
       $xuekewen .= "<a ";
       $xuekewen .= " class="."unit_m1";
       $xuekewen .= " onclick=";
       $xuekewen .= "ShowDialog('/xin/image/". $node->nid."',1000,1000);";
       $xuekewen .= ">1.学课文</a>";
       print $xuekewen;
     ?>
    </li>
   <li>
   <?php 
      //听儿歌
       $video_tingerge .= "<a ";
       $video_tingerge .= " class="."unit_m2";
       $video_tingerge .= " onclick=";
       $video_tingerge .= "ShowDialog('/xin/tingerge/".$node->nid."',800,800);";
       $video_tingerge .= ">2.听儿歌</a>";;
       print $video_tingerge;
     ?>
    </li>
   
   <li>
   <?php 
       //看动画    
       $video_kandonghua .= "<a ";
       $video_kandonghua .= " class="."unit_m3";
       $video_kandonghua .= " onclick=";
       $video_kandonghua .= "ShowDialog('/xin/kandonghua/".$node->nid."',800,800);";
       $video_kandonghua .= ">3.看动画</a>";
       print $video_kandonghua;
     ?>
    </li>
    
   <li>
   <?php         
       //做游戏             
       $video_zuoyouxi .= "<a ";
       $video_zuoyouxi .= " class="."unit_m4";
       $video_zuoyouxi .= " onclick=";
       $video_zuoyouxi .= "ShowDialog('/xin/zuoyouxi/".$node->nid."',800,800);";
       $video_zuoyouxi .= ">4.做游戏</a>";
       print $video_zuoyouxi;
     ?>
    </li>
   <li>
   <?php       
       $xiaoceshi =  views_embed_view("xinimage","geturl",$node->nid);               
       print $xiaoceshi;
     ?>   
   </li>
   
   <li>
   <?php 
       //拓展学习
       $video_tuozhan .= "<a ";
       $video_tuozhan .= " class="."unit_m6";
       $video_tuozhan .= " onclick=";
       $video_tuozhan .= "ShowDialog('/xin/tuozhan/".$node->nid."',800,800);";
       $video_tuozhan .= ">6.拓展学习</a>";
       print $video_tuozhan;
     ?>
    </li>
   </ul>
  </div>
  <div class="bottom"><div class="fltrp_logo fright"></div></div>
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
