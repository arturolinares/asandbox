<?php

/**
 * aBlogCategory form base class.
 *
 * @method aBlogCategory getObject() Returns the current form's model object
 *
 * @package    cropping
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseaBlogCategoryForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'name'            => new sfWidgetFormInputText(),
      'description'     => new sfWidgetFormTextarea(),
      'posts'           => new sfWidgetFormInputCheckbox(),
      'events'          => new sfWidgetFormInputCheckbox(),
      'users_list'      => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUser')),
      'blog_items_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'aBlogItem')),
      'pages_list'      => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'aPage')),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description'     => new sfValidatorString(array('required' => false)),
      'posts'           => new sfValidatorBoolean(array('required' => false)),
      'events'          => new sfValidatorBoolean(array('required' => false)),
      'users_list'      => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUser', 'required' => false)),
      'blog_items_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'aBlogItem', 'required' => false)),
      'pages_list'      => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'aPage', 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'aBlogCategory', 'column' => array('name')))
    );

    $this->widgetSchema->setNameFormat('a_blog_category[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'aBlogCategory';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['users_list']))
    {
      $this->setDefault('users_list', $this->object->Users->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['blog_items_list']))
    {
      $this->setDefault('blog_items_list', $this->object->BlogItems->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['pages_list']))
    {
      $this->setDefault('pages_list', $this->object->Pages->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveUsersList($con);
    $this->saveBlogItemsList($con);
    $this->savePagesList($con);

    parent::doSave($con);
  }

  public function saveUsersList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['users_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Users->getPrimaryKeys();
    $values = $this->getValue('users_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Users', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Users', array_values($link));
    }
  }

  public function saveBlogItemsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['blog_items_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->BlogItems->getPrimaryKeys();
    $values = $this->getValue('blog_items_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('BlogItems', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('BlogItems', array_values($link));
    }
  }

  public function savePagesList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['pages_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Pages->getPrimaryKeys();
    $values = $this->getValue('pages_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Pages', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Pages', array_values($link));
    }
  }

}
