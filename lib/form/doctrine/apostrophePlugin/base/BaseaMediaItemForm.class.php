<?php

/**
 * aMediaItem form base class.
 *
 * @method aMediaItem getObject() Returns the current form's model object
 *
 * @package    asandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseaMediaItemForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'type'           => new sfWidgetFormChoice(array('choices' => array('image' => 'image', 'video' => 'video', 'audio' => 'audio', 'pdf' => 'pdf'))),
      'service_url'    => new sfWidgetFormInputText(),
      'format'         => new sfWidgetFormInputText(),
      'width'          => new sfWidgetFormInputText(),
      'height'         => new sfWidgetFormInputText(),
      'embed'          => new sfWidgetFormTextarea(),
      'title'          => new sfWidgetFormInputText(),
      'description'    => new sfWidgetFormTextarea(),
      'credit'         => new sfWidgetFormInputText(),
      'owner_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Owner'), 'add_empty' => true)),
      'view_is_secure' => new sfWidgetFormInputCheckbox(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
      'slug'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'type'           => new sfValidatorChoice(array('choices' => array('image' => 'image', 'video' => 'video', 'audio' => 'audio', 'pdf' => 'pdf'))),
      'service_url'    => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'format'         => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'width'          => new sfValidatorInteger(array('required' => false)),
      'height'         => new sfValidatorInteger(array('required' => false)),
      'embed'          => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'title'          => new sfValidatorString(array('max_length' => 200)),
      'description'    => new sfValidatorString(array('required' => false)),
      'credit'         => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'owner_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Owner'), 'required' => false)),
      'view_is_secure' => new sfValidatorBoolean(array('required' => false)),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
      'slug'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'aMediaItem', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('a_media_item[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'aMediaItem';
  }

}
