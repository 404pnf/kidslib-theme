<?php

// Plugin definition
$plugin = array(
  'title' => t('Front'),
  'category' => t('Columns: 2'),
  'icon' => 'front.png',
  'theme' => 'panels_front',
  'css' => 'front.css',
  'regions' => array(
    'top_login' => t('top_login'),
    'title' => t('title'),
    'fleft' => t('fleft'),
    'fright' => t('fright'),
    'bottom' => t('bottom'),
 
  ),
);
