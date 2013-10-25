<li>
<?php 
      $category = arg(2);
      $age = arg(3);
      $tid = $row->tid;
      $name = $fields['name']->content;
      if (!empty($age)){
          print l($name,'ebooklist/category/'.$category.'/'.$age.'/'.$tid . '.html');
      }else{
          //print l($name,'ebooklist/category/'.$category.'/1/'.$tid );
          print l($name,'ebooklist/category/'.$category.'/1/'.$tid );
      } 
      print $output;  
?>
</li>

