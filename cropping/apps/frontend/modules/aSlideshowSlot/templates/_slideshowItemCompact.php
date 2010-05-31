<?php use_helper('I18N') ?>
<ul>
  <li class="a-slideshow-image" style="height:<?php echo $options['height'] ?>;<?php echo ($n==0)? 'display:block':'' ?>"><?php echo $embed ?></li>
  <?php if ($options['title']): ?>
    <li class="a-slideshow-meta a-slideshow-title"><span><?php echo $item->title ?></span></li>
  <?php endif ?>
  <?php if ($options['description']): ?>
    <li class="a-slideshow-meta a-slideshow-description"><span><?php echo $item->description ?></span></li>
  <?php endif ?>
  <?php if ($options['credit'] && $item->credit): ?>
    <li class="a-slideshow-meta a-slideshow-credit"><span><?php echo __('Photo Credit: %credit%', array('%credit%' => $item->credit), 'apostrophe') ?></span></li>
  <?php endif ?>
</ul>