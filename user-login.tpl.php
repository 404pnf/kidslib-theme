<div class="input_text font_DFHaibaoW12 login_first_line"><span>用户名</span><?php  print drupal_render($form['name']); ?></div>
<div class="input_text font_DFHaibaoW12"><span>密码</span><?php  print drupal_render($form['pass']); ?></div>


<input class="login_btn font_DFHaibaoW12" type="submit" value="登录"><?php print drupal_render_children($form) ;?></input>

<!-- <div class="login_title_foot"><span class="font_font_mrosoftYHB eshow"><?php  //print l(t('还没有账号？立即注册'), 'modal_forms/nojs/register', array('attributes' => array('id' => 'user-register-link ctools-use-modal ctools-modal-modal-popup-small'), )); ?></span></div>  -->
<div class="login_title_foot"><span class="font_font_mrosoftYHB eshow"><a class="ctools-use-modal ctools-modal-modal-popup-small" href="modal_forms/nojs/register" title="注册" class="fright">还没有账号？立即注册</a> </span></div>