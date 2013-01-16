<!--一行输入框-->
<div class="input_text font_DFHaibaoW12"><span>用 户 名: </span><?php  print drupal_render($form['name']); ?></div>
<div class="input_text font_DFHaibaoW12"><span>密     码: </span><?php  print drupal_render($form['pass']); ?></div>
<!--一行输入框结束-->
<!--提示行-->
<!-- <div class="tips font_mrosoftYHB"><input type="checkbox" /><span>记住我的登录状态/已阅</span></div> -->
<!--提示行结束-->
<button class="login_btn font_DFHaibaoW12"><?php   print drupal_render_children($form) ;?>登录</button>
<div class="login_title_foot"><span class="font_font_mrosoftYHB eshow"><?php  print l(t('还没有账号？立即注册'), 'user/register', array('attributes' => array('id' => 'user-register-link'), )); ?></span></div>