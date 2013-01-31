<script language="javascript" type="text/javascript">
 function ShowDialog(url) {
           var iWidth=800; //���ڿ��
           var iHeight=800;//���ڸ߶�
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