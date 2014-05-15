<li>
<?php 
      $category = arg(2);
      // 因为arg(3)已经被改写有.html后缀了。这里$age出现在第3位且会有第4位因此去掉.html
      $age = str_replace(".html", "", arg(3));
      $tid = $row->tid;
      $name = $fields['name']->content;
      if (!empty($age)){
          //print l($name, 'ebooklist/category/'.$category.'/'.$age.'/'.$tid . '.html');
          print l($name, 'ebooklist/category/'.$category.'/'.$age.'/'.$tid );
      }else{
          //print l($name,'ebooklist/category/'.$category.'/1/'.$tid );
          //print l($name,'ebooklist/category/'.$category.'/1/'.$tid );
      } 
      print $output;  
?>
</li>

