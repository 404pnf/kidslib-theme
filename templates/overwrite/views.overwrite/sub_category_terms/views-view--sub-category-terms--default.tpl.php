<?php if ($rows): ?>
  <ul>
    <?php print $rows; ?>
 </ul>
<?php elseif ($empty): ?>
  <?php print $empty; ?>
<?php endif; ?>
