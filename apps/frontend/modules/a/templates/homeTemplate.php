<?php use_helper('a') ?>
<?php slot('body_class') ?>a-home<?php end_slot() ?>

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
		'aButton', 
		'aText',	  
		'aRawHTML',
	),	
  'type_options' => array(
		'aRichText' => array('tool' => 'Main'), 	
		'aSlideshow' => array("width" => 960, "flexHeight" => true, 'resizeType' => 's'),
		'aVideo' => array('width' => 480, 'flexHeight' => true, 'resizeType' => 's'),
		'aImage' => array('width' => 960, 'flexHeight' => true, 'resizeType' => 's'),
		'aButton' => array('width' => 960, 'flexHeight' => true, 'resizeType' => 's'),
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
		'aButton', 
		'aText',
		'aRawHTML',	
	),
  'type_options' => array(
		'aRichText' => array('tool' => 'Sidebar'),
		'aSlideshow' => array('width' => 300, 'flexHeight' => true, 'resizeType' => 's', 'constraints' => array('minimum-width' => 300)),
		'aVideo' => array('width' => 300, 'flexHeight' => true, 'resizeType' => 's'),		
		'aImage' => array('width' => 300, 'flexHeight' => true, 'resizeType' => 's'),
		'aFeed' => array(),
		'aButton' => array('width' => 300, 'flexHeight' => true, 'resizeType' => 's'),
		'aPDF' => array('width' => 300, 'flexHeight' => true, 'resizeType' => 's'),
	))) ?>
	
	<?php a_slot('news', 'customNews') ?>

	<?php a_slot('events', 'aEvent') ?>
	