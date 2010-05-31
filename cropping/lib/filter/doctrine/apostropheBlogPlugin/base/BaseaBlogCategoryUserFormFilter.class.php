<?php

/**
 * aBlogCategoryUser filter form base class.
 *
 * @package    cropping
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseaBlogCategoryUserFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
    ));

    $this->setValidators(array(
    ));

    $this->widgetSchema->setNameFormat('a_blog_category_user_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'aBlogCategoryUser';
  }

  public function getFields()
  {
    return array(
      'blog_category_id' => 'Number',
      'user_id'          => 'Number',
    );
  }
}
