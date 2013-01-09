       <ul>
             <li>'name' : <?php  print drupal_render($form['name']); ?><?php  //print  $name;  ?>
             </li>
         <li>'pass' :<?php  print drupal_render($form['pass']); ?><?php  //print $pass; ?>
         </li>
     <li class="lefr_p">
      <?php  print drupal_render($form['submit']); ?> <span id="user-register"><?php  print l(t('注册'), 'user/register', array('attributes' => array('id' => 'user-register-link'), )); ?></span>
     </li>
         </ul>
        <?php   print drupal_render_children($form) ;?>

