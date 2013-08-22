<script type="text/javascript" src="/sites/all/themes/ilearning/js/hiddenShow.js"></script>

<script language="javascript" type="text/javascript">
function ShowDialog_video(url) {
       var iWidth=800; //窗口宽度
       var iHeight=600;//窗口高度
       var iTop=(window.screen.height-iWidth)/2;
       var iLeft=(window.screen.width-iWidth)/2;
       window.open(url,"Detail","Scrollbars=no,Toolbar=no,Location=no,Direction=no,Resizeable=no,Width="+iWidth+" ,Height="+iHeight+",top="+iTop+",left="+iLeft);
      }
function ShowDialog_da(url) {
       var iWidth=1200; //窗口宽度
       var iHeight=window.screen.height-120;//窗口高度
       var iTop=0;
       var iLeft=(window.screen.width-iWidth)/2;
       window.open(url,"Detail","Scrollbars=no,Toolbar=no,Location=no,Direction=no,Resizeable=no,Width="+iWidth+" ,Height="+iHeight+",top="+iTop+",left="+iLeft);
      }
function ShowDialog(url,w,h) {
       var iWidth=w; //窗口宽度
       var iHeight=h;//窗口高度
       var iTop=0;
       var iLeft=(window.screen.width-iWidth)/2;
       window.open(url,"Detail","Scrollbars=no,Toolbar=no,Location=no,Direction=no,Resizeable=no,Width="+iWidth+" ,Height="+iHeight+",top="+iTop+",left="+iLeft);
      }
</script>

<div class="top pngFix">
    <div class="top_login">
    </div>
    <div class="title">
        <div class="title_left">
          <a href="<?php
               $age= $node->field_age['und'][0]['tid'];
               $category = $node->field_category['und'][0]['tid'];
               $output = '/ebooklist/category/'.$category.'/'.$age;
               print $output;
            ?>" class="back font_mrosoftYHB fleft">返回</a>
        </div>
          <a class="title_name font_DFHaibaoW12">
            <?php
               $xintitle = $node->field_xin_unit_number['und'][0]['value'];
               $xintitle .= " ";
               $xintitle .=  $node->field_xin_unit_name['und'][0]['value'];
               print $xintitle;
             ?>
          </a>
    </div>
</div>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <div class="unit_bg">
        <ul class="unit_nav_classify">
        <li><a class="unit_m1" onclick="ShowDialog_da('/xin/image/<?php print $node->nid ?>'); >1.学课文</a></li>
        <li><a class="unit_m2" onclick="ShowDialog_video('/xin/tingerge/<?php print $node->nid ?>') ); >2.听儿歌</a></li>
        <li><a class="unit_m3" onclick="ShowDialog_video('/xin/kandonghua/<?php print $node->nid ?>'); >3.看动画</a></li>
        <li><a  class="unit_m4" onclick="ShowDialog_video('/xin/zuoyouxi/<?php print $node->nid ?>'); >4.做游戏</a>";</li>
        <li><?php $xiaoceshi =  views_embed_view("xinimage","geturl",$node->nid); print $xiaoceshi;?></li>
        <li><a class="unit_m6" onclick=ShowDialog_video('/xin/tuozhan/<?php print $node->nid ?>');>6.看一看</a></li>
        </ul>
    </div>

    <div class="nianling">
        <?php
             $age =  views_embed_view("xinimage","getterm",$node->nid);
             print $age;
         ?>
    </div>
</div>

<div class="bottom"><div class="fltrp_logo fright"></div></div>
