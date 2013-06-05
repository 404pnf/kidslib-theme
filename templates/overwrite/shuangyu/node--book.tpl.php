<div id="shuangyu-book-info">

  <?php if (!$page): ?>
    <h2 id="node-title">
      <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
    </h2>
  <?php endif; ?>

  <div class="content clearfix">
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>
</div>
