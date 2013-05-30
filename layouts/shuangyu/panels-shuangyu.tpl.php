<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="http://ilearning.cn/sites/all/themes/ilearning/js/jquery.bookify.js"></script>
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
  
    <div><?php print $content['middle']; ?></div>

<div class="zh_en"><a href="#" class="zh_btn">中文</a> | <a href="#" class="en_btn">英文</a> | <a href="#" class="zhen_btn">中英文</a></div>
