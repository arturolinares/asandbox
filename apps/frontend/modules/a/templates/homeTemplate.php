	<?php use_helper('a') ?>

<?php slot('body_class') ?>a-home<?php end_slot() ?>

<?php $blogOptions = array('slideshowOptions' => array('width' => 360, 'height' => 220,  )) ?>
<?php $eventOptions = array('slideshowOptions' => array('width' => 360, 'height' => 220,  )) ?>
<?php $blogCompactOptions = array('excerptLength' => 40, 'slideshowOptions' => array('width' => 200, 'height' => 130, 'resizeType' => 'c',  ))  ?>
<?php $eventCompactOptions = array('excerptLength' => 40, 'slideshowOptions' => array('width' => 200, 'flexHeight' => true,  )) ?>

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
		'aSlideshow' => array("width" => 720, "flexHeight" => true, 'resizeType' => 's'),
		'aVideo' => array('width' => 720, 'flexHeight' => true, 'resizeType' => 's'),
		'aImage' => array('width' => 720, 'flexHeight' => true, 'resizeType' => 's'),
		'aButton' => array('width' => 720, 'flexHeight' => true, 'resizeType' => 's'),
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
		'aSlideshow' => array('width' => 200, 'flexHeight' => true, 'resizeType' => 's'),
		'aVideo' => array('width' => 200, 'flexHeight' => true, 'resizeType' => 's'),		
		'aImage' => array('width' => 200, 'flexHeight' => true, 'resizeType' => 's'),
		'aFeed' => array(),
		'aButton' => array('width' => 200, 'flexHeight' => true, 'resizeType' => 's'),
		'aPDF' => array('width' => 200, 'flexHeight' => true, 'resizeType' => 's'),
		'aEvent' => $eventCompactOptions,
		'aBlog' => $blogCompactOptions,
		'aEventSingle' => $eventCompactOptions,
		'aBlogSingle' => $blogCompactOptions		
	))) ?>