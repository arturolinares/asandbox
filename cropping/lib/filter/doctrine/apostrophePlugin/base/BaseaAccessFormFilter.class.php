<?php

/**
 * aAccess filter form base class.
 *
 * @package    cropping
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseaAccessFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'page_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Page'), 'add_empty' => true)),
      'privilege' => new sfWidgetFormFilterInput(),
      'user_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'page_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Page'), 'column' => 'id')),
      'privilege' => new sfValidatorPass(array('required' => false)),
      'user_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('a_access_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'aAccess';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'page_id'   => 'ForeignKey',
      'privilege' => 'Text',
      'user_id'   => 'ForeignKey',
    );
  }
}
