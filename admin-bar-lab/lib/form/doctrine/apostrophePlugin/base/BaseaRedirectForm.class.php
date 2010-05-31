<?php

/**
 * aRedirect form base class.
 *
 * @method aRedirect getObject() Returns the current form's model object
 *
 * @package    asandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseaRedirectForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'page_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Page'), 'add_empty' => true)),
      'slug'       => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'page_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Page'), 'required' => false)),
      'slug'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'aRedirect', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('a_redirect[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'aRedirect';
  }

}
