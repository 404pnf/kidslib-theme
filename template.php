<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * A QUICK OVERVIEW OF DRUPAL THEMING
 *
 *   The default HTML for all of Drupal's markup is specified by its modules.
 *   For example, the comment.module provides the default HTML markup and CSS
 *   styling that is wrapped around each comment. Fortunately, each piece of
 *   markup can optionally be overridden by the theme.
 *
 *   Drupal deals with each chunk of content using a "theme hook". The raw
 *   content is placed in PHP variables and passed through the theme hook, which
 *   can either be a template file (which you should already be familiary with)
 *   or a theme function. For example, the "comment" theme hook is implemented
 *   with a comment.tpl.php template file, but the "breadcrumb" theme hooks is
 *   implemented with a theme_breadcrumb() theme function. Regardless if the
 *   theme hook uses a template file or theme function, the template or function
 *   does the same kind of work; it takes the PHP variables passed to it and
 *   wraps the raw content with the desired HTML markup.
 *
 *   Most theme hooks are implemented with template files. Theme hooks that use
 *   theme functions do so for performance reasons - theme_field() is faster
 *   than a field.tpl.php - or for legacy reasons - theme_breadcrumb() has "been
 *   that way forever."
 *
 *   The variables used by theme functions or template files come from a handful
 *   of sources:
 *   - the contents of other theme hooks that have already been rendered into
 *     HTML. For example, the HTML from theme_breadcrumb() is put into the
 *     $breadcrumb variable of the page.tpl.php template file.
 *   - raw data provided directly by a module (often pulled from a database)
 *   - a "render element" provided directly by a module. A render element is a
 *     nested PHP array which contains both content and meta data with hints on
 *     how the content should be rendered. If a variable in a template file is a
 *     render element, it needs to be rendered with the render() function and
 *     then printed using:
 *       <?php print render($variable); ?>
 *
 * ABOUT THE TEMPLATE.PHP FILE
 *
 *   The template.php file is one of the most useful files when creating or
 *   modifying Drupal themes. With this file you can do three things:
 *   - Modify any theme hooks variables or add your own variables, using
 *     preprocess or process functions.
 *   - Override any theme function. That is, replace a module's default theme
 *     function with one you write.
 *   - Call hook_*_alter() functions which allow you to alter various parts of
 *     Drupal's internals, including the render elements in forms. The most
 *     useful of which include hook_form_alter(), hook_form_FORM_ID_alter(),
 *     and hook_page_alter(). See api.drupal.org for more information about
 *     _alter functions.
 *
 * OVERRIDING THEME FUNCTIONS
 *
 *   If a theme hook uses a theme function, Drupal will use the default theme
 *   function unless your theme overrides it. To override a theme function, you
 *   have to first find the theme function that generates the output. (The
 *   api.drupal.org website is a good place to find which file contains which
 *   function.) Then you can copy the original function in its entirety and
 *   paste it in this template.php file, changing the prefix from theme_ to
 *   STARTERKIT_. For example:
 *
 *     original, found in modules/field/field.module: theme_field()
 *     theme override, found in template.php: STARTERKIT_field()
 *
 *   where STARTERKIT is the name of your sub-theme. For example, the
 *   zen_classic theme would define a zen_classic_field() function.
 *
 *   Note that base themes can also override theme functions. And those
 *   overrides will be used by sub-themes unless the sub-theme chooses to
 *   override again.
 *
 *   Zen core only overrides one theme function. If you wish to override it, you
 *   should first look at how Zen core implements this function:
 *     theme_breadcrumbs()      in zen/template.php
 *
 *   For more information, please visit the Theme Developer's Guide on
 *   Drupal.org: http://drupal.org/node/173880
 *
 * CREATE OR MODIFY VARIABLES FOR YOUR THEME
 *
 *   Each tpl.php template file has several variables which hold various pieces
 *   of content. You can modify those variables (or add new ones) before they
 *   are used in the template files by using preprocess functions.
 *
 *   This makes THEME_preprocess_HOOK() functions the most powerful functions
 *   available to themers.
 *
 *   It works by having one preprocess function for each template file or its
 *   derivatives (called theme hook suggestions). For example:
 *     THEME_preprocess_page    alters the variables for page.tpl.php
 *     THEME_preprocess_node    alters the variables for node.tpl.php or
 *                              for node--forum.tpl.php
 *     THEME_preprocess_comment alters the variables for comment.tpl.php
 *     THEME_preprocess_block   alters the variables for block.tpl.php
 *
 *   For more information on preprocess functions and theme hook suggestions,
 *   please visit the Theme Developer's Guide on Drupal.org:
 *   http://drupal.org/node/223440 and http://drupal.org/node/1089656
 */


/**
 * Override or insert variables into the maintenance page template.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("maintenance_page" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_maintenance_page(&$variables, $hook) {
  // When a variable is manipulated or added in preprocess_html or
  // preprocess_page, that same work is probably needed for the maintenance page
  // as well, so we can just re-use those functions to do that work here.
  STARTERKIT_preprocess_html($variables, $hook);
  STARTERKIT_preprocess_page($variables, $hook);
}
// */

/**
 * Override or insert variables into the html templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("html" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_html(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // The body tag's classes are controlled by the $classes_array variable. To
  // remove a class from $classes_array, use array_diff().
  //$variables['classes_array'] = array_diff($variables['classes_array'], array('class-to-remove'));
}
// */

/**
 * Override or insert variables into the page templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_page(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_node(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // Optionally, run node-type-specific preprocess functions, like
  // STARTERKIT_preprocess_node_page() or STARTERKIT_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $variables['node']->type;
  if (function_exists($function)) {
    $function($variables, $hook);
  }
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_comment(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the region templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("region" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_region(&$variables, $hook) {
  // Don't use Zen's region--sidebar.tpl.php template for sidebars.
  //if (strpos($variables['region'], 'sidebar_') === 0) {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('region__sidebar'));
  //}
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_block(&$variables, $hook) {
  // Add a count to all the blocks in the region.
  // $variables['classes_array'][] = 'count-' . $variables['block_id'];

  // By default, Zen will use the block--no-wrapper.tpl.php for the main
  // content. This optional bit of code undoes that:
  //if ($variables['block_html_id'] == 'block-system-main') {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('block__no_wrapper'));
  //}
}
// */


function ilearning_theme(&$existing, $type, $theme, $path){
  $hooks = array();
   // Make user-register.tpl.php available
  $hooks['user_register_form'] = array (
     'render element' => 'form',
     'path' => drupal_get_path('theme','ilearning'),
     'template' => 'user-register',
     'preprocess functions' => array('ilearning_preprocess_user_register_form'),
  );
  
  $hooks['user_login'] = array (
     'template' => 'user-login',
      'render element' => 'form', 
      //'preprocess functions' => array('ilearning_preprocess_user_login'),	  
  );
  $hooks['user_pass'] = array (
  	 'template' => 'user-pass',
  	 'render element' => 'form', 
     //'variables' => array('content' => NULL),
  );
   
  return $hooks;
}

function ilearning_preprocess_user_register_form(&$vars) {
  $args = func_get_args();
  array_shift($args);
  $form_state['build_info']['args'] = $args;
  $vars['form'] = drupal_build_form('user_register_form', $form_state['build_info']['args']);
}


function ilearning_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'user_register_form') {      
    //$form['name']['#title'] = Null; // Change text on form
    $form['account']['name']['#description'] = Null; // Change text on form
    $form['account']['mail']['#description'] = Null;
	
    $form['account']['name']['#theme_wrappers'] = array();
	$form['account']['mail']['#theme_wrappers'] = array();
	$form['account']['pass']['#theme_wrappers'] = array();
	$form['field_xieyi']['#theme_wrappers'] = array();
    //$form['name']['#attributes'] = array('placeholder' => t('username'));
    //$form['name']['#size'] = '30';
    //$form['pass']['#title'] = Null;
    $form['account']['pass']['#description'] = Null; // Change text on for
    //$form['pass']['#attributes'] = array('placeholder' => t('password'));
    //$form['pass']['#size'] = '30';
    //$form['actions']['submit']['#value'] = t('password');
    //$form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/images/Login.png');
    //$form['links']['#markup'] = '<a class="user-password" href="'.url('user/password').'">' . t('Forgot your password?') . '</a>'; // Remove Request New Password from Block form
    //$form['links']['#weight'] = 540;
  }
}


function ilearning_captcha($variables) {
  $element = $variables['element'];
  if (!empty($element['#description']) && isset($element['captcha_widgets'])) {
    $fieldset = array(
      '#type' => 'fieldset',
      '#title' => t('CAPTCHA'),
      '#description' => $element['#description'],
      '#children' => drupal_render_children($element),
      '#attributes' => array('class' => array('captcha')),
    );
    return theme('fieldset', array('element' => $fieldset));
  }
  else {
    //print debug($element);
    $element['captcha_widgets']['captcha_response']['#description'] = Null; 
    if(isset($element['captcha_widgets']['captcha_image'])){
      $element['captcha_widgets']['captcha_image']['#weight'] = 20;
    }
    if(isset($element['captcha_widgets']['captcha_image'])){
      $element['captcha_widgets']['captcha_refresh']['#weight'] = 21;
    }
	
    return '<div class="captcha">' . drupal_render_children($element) . '<div class="clearfix"></div></div>';
  }
}

function ilearning_preprocess_user_login(&$variables) {  
 //drupal_set_message('123456');
 //print_r ($variables['form']['name']);
 // $variables['name'] = drupal_render($variables['form']['name']);
 // $variables['pass'] = drupal_render($variables['form']['pass']);
 //$variables['login'] = drupal_render($variables['form']['actions']['submit']);
	$variables['login'] = drupal_render($variables['form']['actions']['submit']);
	
    unset($variables['form']['links']);
 //$variables['links'] = drupal_render($variables['form']['links']);
 // $variables['hidden'] = drupal_render_children($variables['form']);
}

function ilearning_form_user_login_alter(&$form, &$form_state) {
   //drupal_set_message('123456');
   $form['name']['#theme_wrappers'] = array();
   $form['pass']['#theme_wrappers'] = array();

   //print debug($form);
}


function ilearning_preprocess_user_pass(&$variables) {
	$variables['pass'] = drupal_render($variables['form']['actions']['submit']);		
	unset($variables['form']['links']);
}

function ilearning_form_user_pass_alter(&$form, &$form_state) {
	$form['name']['#theme_wrappers'] = array();
}


/* 
$query = db_select('node', 'n');
$query->leftJoin('field_data_field_display_type', 'type', 'type.field_display_type_value = \'all\'');
$_gallery = $query->fields('n',array('nid'))
             ->condition('n.type', 'gallery')
             ->where('n.nid = type.entity_id')
             ->orderBy('changed', 'DESC')
             ->range(0, 5)
             ->execute()
             ->fetchAll(); */



//previous || next node which in the standard node type
function node_sibling_nse($node, $dir = 'next', $prepend_text = NULL, $append_text = NULL, $next_node_text = NULL) {
	$query = 'SELECT n.nid, n.title FROM {node} n
			  LEFT JOIN  {field_revision_field_ref_to_nse} nse ON nse.entity_id = n.nid WHERE'
		     	 
             //. 'nse.field_ref_to_nse_target_id = 99 AND ' 
	        //SELECT n.nid, n.title FROM node AS n LEFT JOIN field_revision_field_ref_to_nse AS nse ON nse.entity_id = n.nid WHERE nse.field_ref_to_nse_target_id =99 ORDER BY n.nid ASC LIMIT 0 , 30
             . ' nse.field_ref_to_nse_target_id = :target_id AND'
		     . ' n.created ' . ($dir == 'next' ? '<' : '>')
		     . ' :created AND n.type = :type AND n.status = 1 '
	         //. ' n.type = :type AND n.status = 1 '
             . ' ORDER BY n.nid ' . ($dir == 'prev' ? 'ASC' : 'DESC')
	         //. ' ORDER BY n.nid '      
	         . ' LIMIT 1';
	//use fetchObject to fetch a single row
	$row = db_query($query, array(':created' => $node->created, ':type' => $node->type,':target_id'=>$node->field_ref_to_nse['und']['0']['target_id']))->fetchObject();
    //$row = db_query($query, array(':type' => $node->type,':target_id'=>$node->field_ref_to_nse['und']['0']['target_id']))->fetchObject();
	 
	 if ($row) {
		drupal_add_html_head_link(array(
		'rel' => $dir,
		'type' => 'text/html',
		'title' => $row->nid,
		// Force the URL to be absolute, for consistency with other <link> tags
		// output by Drupal.
		//'href' =>url('node/' . $row->nid, array('absolute' => TRUE)),
		));		
		$text = $next_node_text ? t($next_node_text) : $row->nid;
		return t($text,array('attributes' => array('rel' => array($dir))));
	}else{
		return FALSE;
	}
}

function ilearning_get_shuffle_array() {
  $cache = &drupal_static(__FUNCTION__);
  if (!isset($cache)) {
    $bg_arr = array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13', '14', '15');
    shuffle($bg_arr);
	$cache = $bg_arr;
    return $cache;
  }
  return $cache;
}

// bai, xiaobai 
// overwrite html.tpl.php
// custom html.tpl.php
// https://drupal.org/node/1041768
// see last reply
function ilearning_preprocess_html(&$variables) {
  // If on an individual node page, add the node type to body classes.
  if ($node = menu_get_object()) {
    $variables['theme_hook_suggestions'][] = 'html__'. $node->type;
  }
}

function asset_url() {
   return 'asset'; 
}
