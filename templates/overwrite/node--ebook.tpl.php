
<script src="/sites/all/themes/ilearning/booklet/jquery-ui.min.js" type="text/javascript"></script>
<script src="/sites/all/themes/ilearning/booklet/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="/sites/all/themes/ilearning/booklet/jquery.booklet.1.4.0.min.js" type="text/javascript"></script>
<link href="/sites/all/themes/ilearning/booklet/jquery.booklet.1.4.0.css" type="text/css" rel="stylesheet" media="screen, projection, tv" />





<div id="node-<?php print $node->nid; ?>"
	class="<?php print $classes; ?> clearfix" <?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2 <?php print $title_attributes; ?>>
		<a href="<?php print $node_url; ?>"><?php print $title; ?></a>
	</h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <div class="meta submitted">
      <?php print $user_picture; ?>
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>


  <div class="ebook-wrapper">
     
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      //print render($content);
      //��ӡfield_collection
 
      //print render($content['field_page_content']);

    ?>

    
   <?php
       
        // check if field collection is not empty. If content exists, do some stuff.
        //if (!empty($content['field_page_content'])) {
           // loop all the item in the fiel_page_content set 500 is limit
           
           for($item_count=0;$item_count<500;$item_count++){ 
            foreach($content['field_page_content'][$item_count]['entity']['field_collection_item'] as $field_collection_item)  {
              print '<div class="ebook_content">';  
              
            	 $ebook_image = '<div class= "ebook_image">';
            	 $ebook_image .= render($field_collection_item['field_page_image']);
            	 $ebook_image .= '</div>';
            	 print $ebook_image;
   
                // check if audio is emtpy if not that we can display audio.
                 //$pnumber = render($field_collection_item['field_page_number']);
                 if (!empty ($field_collection_item['field_page_audio'])){                   
                     print '<div class="ebook_audio">';                             	      	
                     print render($field_collection_item['field_page_audio']);    
                     print  '</div>';
                    
                     
               
                 }
              print '</div>';
            }
            
           } 
            //close your custom wrapper.         
        //} 
    ?>
  
  </div>

			

  
  <?php
    // Remove the "Add new comment" link on the teaser page or if the comment
    // form is being displayed on the same page.
    if ($teaser || !empty($content['comments']['comment_form'])) {
      unset($content['links']['comment']['#links']['comment-add']);
    }
    // Only display the wrapper div if there are links.
    $links = render($content['links']);
    if ($links):
  ?>
    <div class="link-wrapper">
      <?php print $links; ?>
    </div>
  <?php endif; ?>

  <?php print render($content['comments']); ?>

</div>