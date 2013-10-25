<ul id="classify_nav">
  <li>
    <?php 
      $name = $fields['name']->content;
      print l($name,'ebooklist/category/' . arg(2) . '/' . $fields['tid']->content . '.html');
     ?>
  </li>
</ul>  
