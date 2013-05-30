<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *  <a href="/ebooklist/category/<?php print arg(2);?>/<?php print arg(3);?>/<?php print $row->tid;?>"><?php print $fields['name']->content;?></a>
 * @ingroup views_templates
 * print l($name,'ebooklist/category/' . arg(2) . '/' . $fields['tid']->content);
 */
?>
<li>


<?php 
      $category = arg(2);
      $age = arg(3);
      $tid = $row->tid;
      $name = $fields['name']->content;
      if (!empty($age)){
            
          print l($name,'ebooklist/category/'.$category.'/'.$age.'/'.$tid);
      	    /* $output .= '<a href="/ebooklist/category/';
      	    $output .=  $category.'/'.$age.'/'.$tid; 
      	    $output .= '">'.$fields['name']->content.'</a>'; */
      }else{
          print l($name,'ebooklist/category/'.$category.'/1/'.$tid);
        /* $output .= '<a href="/ebooklist/category/' ;
        $output .=  $category.'/1/'.$tid.'">'.$fields['name']->content.'</a>'; */
      } 
      print $output;  
?>
</li>

