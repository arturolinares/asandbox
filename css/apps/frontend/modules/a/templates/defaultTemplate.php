<?php use_helper('a') ?>
<?php $page = aTools::getCurrentPage() ?>
<?php slot('body_class') ?>a-default<?php end_slot() ?>

<?php if (0): ?>
	<?php if (!$page->hasChildren()): ?>
		<?php slot('a-subnav','') ?>
		<?php slot('body_class') ?>a-default no-sidebar<?php end_slot() ?>	
	<?php endif ?>	
<?php endif ?>

<?php // Let's use variables to avoid passing the same things to two separate slots. These are ?>
<?php // NOT global variables, just conveniences for this template ?>

<?php // By default (no options) blog posts and events display nice little excerpts you can click on to see more ?>
<?php $blogOptions = array('slideshowOptions' => array('width' => 480, 'height' => 320,  )) ?>
<?php $eventOptions = array('slideshowOptions' => array('width' => 340, 'height' => 220,  )) ?>
<?php $blogCompactOptions = array('excerptLength' => 40, 'slideshowOptions' => array('width' => 200, 'height' => 130,  ))  ?>
<?php $eventCompactOptions = array('excerptLength' => 40, 'slideshowOptions' => array('width' => 120, )) ?>

<?php // You can use a custom subtemplate to display blog posts and events differently. ?>
<?php // With tis setting we render _singleColumnTemplate_inDefaultPageBody.php, etc. (the blog post template ?>
<?php // plus the subtemplate creates the full partial name). These go in your app level overrides of aBlog/templates and ?>
<?php // aEvent/templates ?>

<?php // $blogOptions = array('subtemplate' => 'inDefaultPageBody') ?>
<?php // $eventOptions = array('subtemplate' => 'inDefaultPageSidebar') ?>

<?php // You can also specify separate subtemplates for every blog post template individually ?>
<?php // $blogOptions = array('template_options' => array('singleColumnTemplate' => array('subtemplate' => 'inDefautlPageBody'))) ?>

<?php // And you can just force the use of a different blog post template (only makes sense if ?>
<?php // you purposely design one to be the superset of another with the same area names). Usually you ?>
<?php // don't mix this with subtemplate, but you can ?>

<?php // $blogOptions = array('template' => 'myOwnTemplate') ?>

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
    'aText' => array('multiline' => true),
		'aRichText' => array('tool' => 'Main'), 	
		'aSlideshow' => array("width" => 480, "flexHeight" => true),
		'aVideo' => array('width' => 480, 'flexHeight' => true, 'resizeType' => 's'),		
		'aImage' => array('width' => 480, 'flexHeight' => true, 'resizeType' => 's'),
		'aFeed' => array(),
		'aButton' => array('width' => 480, 'flexHeight' => true, 'resizeType' => 's'),
		'aPDF' => array('width' => 480, 'flexHeight' => true, 'resizeType' => 's'),		
		'aBlog' => $blogOptions,
		'aBlogSingle' => $blogOptions,
		'aEvent' => $eventOptions,
		'aEventSingle' => $eventOptions,
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
		'aEvents' => $eventCompactOptions,
		'aEvent' => $eventCompactOptions,
		'aBlog' => $blogCompactOptions,
		'aBlogSingle' => $blogCompactOptions
	))) ?>
