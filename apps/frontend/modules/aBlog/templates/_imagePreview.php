<h3 class="a-blog-item-title">
  <?php echo link_to($a_blog_post->getTitle(), 'a_blog_post', $a_blog_post) ?>
</h3>

<?php if($options['maxImages'] && $aEvent->hasMedia()): ?>		
<div class="a-blog-item-media">
		<?php include_component('aSlideshowSlot', 'slideshow', array(
	  'items' => $aEvent->getMediaForArea('blog-body', 'image', $options['maxImages']),
	  'id' => 'a-slideshow-blogitem-'.$aEvent['id'],
	  'options' => $options['slideshowOptions']
	  )) ?>
</div>
<?php endif ?>
