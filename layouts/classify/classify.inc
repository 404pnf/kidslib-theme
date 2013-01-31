<?php

// Plugin definition
$plugin = array(
  'title' => t('classify'),
  'category' => t('Columns: 2'),
  'icon' => 'classify.png',
  'theme' => 'panels_classify',
  'css' => 'classify.css',
  'admin css' => 'classify_admin.css',
  'regions' => array(
    'top_login' => t('top_login'),
    'title' => t('title'),
    'left_bookshelf' => t('left_bookshelf'),
    'top_bookshelf' => t('top_bookshelf'),
    'book_list' => t('book_list'),
    'classify_name' => t('classify_name'),
 
  ),
);
