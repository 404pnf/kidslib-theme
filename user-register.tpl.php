﻿<?php   ?>
<div id="register" >
<div class="input_text font_DFHaibaoW12"><span>用户名: </span><?php print render($form['account']['name']); ?> </div>
<div class="input_text font_DFHaibaoW12"><span>邮  箱: </span><?php print render($form['account']['mail']); ?> </div>
<div  class="input_text_1 font_DFHaibaoW12"><?php print render($form['account']['pass']); ?> </div>
<div  class="input_text_1 font_DFHaibaoW12"><?php print render($form['captcha']); ?> </div>
<div  class="input_text_1 font_DFHaibaoW12"><?php print render($form['field_xieyi']); ?> </div> <div>
<?php  print drupal_render($form['actions']); print drupal_render($form['form_build_id']);  print drupal_render($form['form_id']);?> </div></div>