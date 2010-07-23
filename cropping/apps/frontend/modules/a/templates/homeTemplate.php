	<?php use_helper('a') ?>

<?php slot('body_class') ?>a-home<?php end_slot() ?>

<?php $blogOptions = array('slideshowOptions' => array('width' => 360, 'height' => 220,  )) ?>
<?php $eventOptions = array('slideshowOptions' => array('width' => 360, 'height' => 220,  )) ?>
<?php $blogCompactOptions = array('excerptLength' => 40, 'slideshowOptions' => array('width' => 200, 'height' => 130,  ))  ?>
<?php $eventCompactOptions = array('excerptLength' => 40, 'slideshowOptions' => array('width' => 120, )) ?>

<?php // Breadcrumb is removed for the home page template because it is redundant ?>
<?php slot('a-breadcrumb', '') ?>

<?php // Subnav is removed for the home page template because it is redundant ?>
<?php slot('a-subnav', '') ?>

<?php a_area('body', array(
	'allowed_types' => array(
		'aRichText', 
		'aSlideshow', 
		'aVideo',
		'aBlog',
		'aEvent',
		'aImage', 
		'aFeed', 
		'aPDF',
		'aBlogSingle', 
		'aEventSingle',		
		'aButton', 
		'aText',	  
		'aRawHTML',
	),	
  'type_options' => array(
		'aRichText' => array('tool' => 'Main'), 	
		// Spike put a fixed aspect ratio in here to demonstrate cropping features
		'aSlideshow' => array("width" => 720, "height" => 360, 'resizeType' => 'c', "constraints" => array("minimum-width" => 720, "minimum-height" => 360, "aspect-width" => 720, "aspect-height" => 360)),
		'aVideo' => array("width" => 720, "height" => 360, 'resizeType' => 'c'),
		'aImage' => array("width" => 720, "height" => 360, 'resizeType' => 'c'),
		'aButton' => array("width" => 720, "height" => 360, 'resizeType' => 'c'),
		'aBlog' => $blogOptions,
		'aBlogSingle' => $blogOptions,
		'aEvent' => $eventOptions,
		'aEventSingle' => $eventOptions, 
	))) ?>

<?php a_area('sidebar', array(
		'allowed_types' => array(
		'aRichText', 
		'aSlideshow', 
		'aVideo',
		'aBlog',
		'aEvent',
		'aImage', 
		'aFeed', 
		'aPDF', 
		'aBlogSingle', 
		'aEventSingle',
		'aButton', 
		'aText',
		'aRawHTML',	
	),
  'type_options' => array(
		'aRichText' => array('tool' => 'Sidebar'),
		'aSlideshow' => array('width' => 200, 'flexHeight' => true, 'resizeType' => 's', 'constraints' => array('aspect-width' => 200, 'aspect-height' => 125)),
		'aVideo' => array('width' => 200, 'flexHeight' => true, 'resizeType' => 's'),		
		'aImage' => array('width' => 200, 'flexHeight' => true, 'resizeType' => 's'),
		'aFeed' => array(),
		'aButton' => array('width' => 200, 'flexHeight' => true, 'resizeType' => 's'),
		'aPDF' => array('width' => 200, 'flexHeight' => true, 'resizeType' => 's'),
		'aEvents' => $eventCompactOptions,
		'aEvent' => $eventCompactOptions,
		'aBlog' => $blogCompactOptions,
		'aBlogSingle' => $blogCompactOptions		
	))) ?>