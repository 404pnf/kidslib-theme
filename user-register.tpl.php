<?php   ?>

<div id="register" >

<div style="color: red;"><?php print t('用户名'); ?> <?php print render($form['account']['name']); ?> </div>
<div><?php print t('电子邮件地址'); ?> <?php print render($form['account']['mail']); ?> </div>
<div><?php print render($form['account']['pass']); ?> </div>
<div><?php print render($form['captcha']); ?> </div>
<div><?php print render($form['field_xieyi']); ?> </div>
 <div>
<?php
  print drupal_render($form['actions']);
  print drupal_render($form['form_build_id']);
  print drupal_render($form['form_id']);
?>
 </div>
</div>

