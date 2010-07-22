<?php

/**
 * aBlogCategory filter form base class.
 *
 * @package    asandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseaBlogCategoryFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'            => new sfWidgetFormFilterInput(),
      'description'     => new sfWidgetFormFilterInput(),
      'posts'           => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'events'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'users_list'      => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUser')),
      'blog_items_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'aBlogItem')),
      'pages_list'      => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'aPage')),
    ));

    $this->setValidators(array(
      'name'            => new sfValidatorPass(array('required' => false)),
      'description'     => new sfValidatorPass(array('required' => false)),
      'posts'           => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'events'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'users_list'      => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'sfGuardUser', 'required' => false)),
      'blog_items_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'aBlogItem', 'required' => false)),
      'pages_list'      => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'aPage', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('a_blog_category_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addUsersListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.aBlogCategoryUser aBlogCategoryUser')
      ->andWhereIn('aBlogCategoryUser.user_id', $values)
    ;
  }

  public function addBlogItemsListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.aBlogItemCategory aBlogItemCategory')
      ->andWhereIn('aBlogItemCategory.blog_item_id', $values)
    ;
  }

  public function addPagesListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.aBlogPageCategory aBlogPageCategory')
      ->andWhereIn('aBlogPageCategory.page_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'aBlogCategory';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'name'            => 'Text',
      'description'     => 'Text',
      'posts'           => 'Boolean',
      'events'          => 'Boolean',
      'users_list'      => 'ManyKey',
      'blog_items_list' => 'ManyKey',
      'pages_list'      => 'ManyKey',
    );
  }
}
