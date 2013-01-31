<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="ebook_wrapper">
<?php if (!empty($title)): ?>
  <?php print $title; ?>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?> 
    <?php print $row; ?>
<?php endforeach; ?>
</div>