<?php if (!$label_hidden): ?>
  <div>><?php print $label ?>:&nbsp;</div>
<?php endif; ?>

<div class = "items">
  <?php foreach ($items as $delta => $item): ?>
    <div class="field-item"><?php print render($item); ?></div>
  <?php endforeach; ?>
    </div>
</div>
