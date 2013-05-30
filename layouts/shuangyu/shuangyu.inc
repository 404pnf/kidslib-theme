<?php

/**
 * implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('shuangyu read'),
  'category' => t('Columns: 1'),
  'icon' => 'onecol.png',
  'theme' => 'panels_shuangyu',
  'css' => 'shuangyu.css',
  'regions' => array('middle' => t('Middle column')),
);
