<?php

// This is a dev sandbox for a feature branch so let index.php use the dev controller

require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'dev', false);
sfContext::createInstance($configuration)->dispatch();
