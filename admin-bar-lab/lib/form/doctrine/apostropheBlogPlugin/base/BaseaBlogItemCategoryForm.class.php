<?php

/**
 * aBlogItemCategory form base class.
 *
 * @method aBlogItemCategory getObject() Returns the current form's model object
 *
 * @package    asandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseaBlogItemCategoryForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'blog_item_id'     => new sfWidgetFormInputHidden(),
      'blog_category_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'blog_item_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'blog_item_id', 'required' => false)),
      'blog_category_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'blog_category_id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('a_blog_item_category[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'aBlogItemCategory';
  }

}
