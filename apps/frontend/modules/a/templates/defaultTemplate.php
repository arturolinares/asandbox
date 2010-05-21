<?php use_helper('a') ?>
<?php $page = aTools::getCurrentPage() ?>
<?php slot('body_class') ?>a-default<?php end_slot() ?>

<?php if (0): ?>
	<?php if (!$page->hasChildren()): ?>
		<?php slot('a-subnav','') ?>
		<?php slot('body_class') ?>a-default no-sidebar<?php end_slot() ?>	
	<?php endif ?>	
<?php endif ?>

<?php // Single and multiple blog slots want the same options in this case ?>
<?php // You can specify separate subtemplates for every blog post template. ?>
<?php // The subtemplate name is appended to the blog template name, so the ?>
<?php // partial that gets loaded is _singleColumnTemplate_inDefaultPageBody.php ?>
<?php // Note that all of your blog templates must live in your override of the ?>
<?php // aBlog/templates folder ?>

<?php // If you want, you can be explicit about the subtemplate for each ?>
<?php // blog template: ?>

<?php // $blogOptions = array('template_options' => array('singleColumnTemplate' => array('subtemplate', 'inDefautlPageBody'))) ?>

<?php $blogOptions = array('subtemplate' => 'inDefaultPageBody') ?>

<?php a_area('body', array(
	'allowed_types' => array(
		'aRichText', 
		'aSlideshow', 
		'aVideo', 
		'aImage', 
		'aFeed', 
		'aPDF',		
		'aButton', 
		'aBlog',
		'aBlogSingle',		
		'aText',
		'aRawHTML',
	),
  'type_options' => array(
    'aText' => array('multiline' => true),
		'aRichText' => array('tool' => 'Main'), 	
		'aSlideshow' => array("width" => 480, "flexHeight" => true),
		'aVideo' => array('width' => 480, 'flexHeight' => true, 'resizeType' => 's'),		
		'aImage' => array('width' => 480, 'flexHeight' => true, 'resizeType' => 's'),
		'aFeed' => array(),
		'aButton' => array('width' => 480, 'flexHeight' => true, 'resizeType' => 's'),
		'aPDF' => array('width' => 480, 'flexHeight' => true, 'resizeType' => 's'),		
		'aBlog' => $blogOptions,
		'aBlogSingle' => $blogOptions
	))) ?>
	
<?php // You can also just let the blog post slots display a short excerpt, ?>
<?php // which is the default behavior. The first image, if any are present, ?>
<?php // is shown above the excerpt. A "Read More" link is provided to get to ?>
<?php // the full blog post. ?>

<?php a_area('sidebar', array(
	'allowed_types' => array(
		'aRichText', 
		'aSlideshow', 
		'aVideo',
		'aBlog', 		 
		'aImage', 
		'aFeed', 
		'aPDF', 
		'aButton', 
		'aBlog',
		'aBlogSingle',
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
		'aPDF' => array('width' => 200, 'flexHeight' => true, 'resizeType' => 's')		
	))) ?>
