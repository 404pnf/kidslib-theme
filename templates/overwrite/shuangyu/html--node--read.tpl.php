<!DOCTYPE html>
<head>
  <?php //print $head; ?>
  <?php //<title><?php print $head_title; ?> <?php //</title> ?>
  <?php  //print $styles; ?>
  <link rel="stylesheet" href="<?php print $base_path ?>/sites/all/themes/bootstrap/css/bootstrap.min.css">
<style type="text/css">
    /* line-height, font-size efined in js */
    * {
      /*font-size: 20px;*/
     }
    table, td, th {
      }
      td {
       /* height:50px; */
       vertical-align:top;
       text-align:left;
       padding-bottom:30px;/*行高的倍数-chenjing*/
       padding-left:20px;
      }
      /*chenjing*/
      .ebook_title{ position:absolute; left:20%; top:7%; font-weight:bold; font-size:35px; width:750px;}
      .zh_en{ position:absolute; left:70%; bottom:10%; font-size:14px;}
</style>
</head>
  <title><?php //print $head_title; ?></title>
</head>
<body>
  <?php print $page; ?>
  <div class="zh_en"><a href="#" class="zh_btn">中文</a> | <a href="#" class="en_btn">英文</a> | <a href="#" class="zhen_btn">中英文</a></div>

  <script src="<?php print $base_path ?>/sites/all/themes/bootstrap/js/jquery.min.js"></script>
  <script src="<?php print $base_path ?>/sites/all/themes/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php print $base_path ?>/sites/all/themes/ilearning/js/jquery.bookify.js"></script>
</body>
</html>
