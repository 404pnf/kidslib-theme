<!-- 这个是让鼠标放上去，书的封面变大显示完整文字的js代码 -->
<script language="javascript" type="text/javascript">
 function ShowDialog(url) {
           var iWidth=800;
           var iHeight=800;
           var iTop=(window.screen.height-iHeight)/2;
           var iLeft=(window.screen.width-iWidth)/2;
           window.open(url,"Detail","Scrollbars=no,Toolbar=no,Location=no,Direction=no,Resizeable=no,Width="+iWidth+" ,Height="+iHeight+",top="+iTop+",left="+iLeft);
          }
</script>

<?php if ($rows): ?>
	<?php print $rows; ?>
<?php elseif ($empty): ?>
	<?php print $empty; ?>
<?php endif; ?>

<?php if ($pager): ?>
	<?php print $pager; ?>
<?php endif; ?>
