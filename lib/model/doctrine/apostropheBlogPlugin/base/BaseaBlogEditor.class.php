<?php

/**
 * BaseaBlogEditor
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $blog_item_id
 * @property integer $user_id
 * @property aBlogItem $BlogItem
 * @property sfGuardUser $Editor
 * 
 * @method integer     getBlogItemId()   Returns the current record's "blog_item_id" value
 * @method integer     getUserId()       Returns the current record's "user_id" value
 * @method aBlogItem   getBlogItem()     Returns the current record's "BlogItem" value
 * @method sfGuardUser getEditor()       Returns the current record's "Editor" value
 * @method aBlogEditor setBlogItemId()   Sets the current record's "blog_item_id" value
 * @method aBlogEditor setUserId()       Sets the current record's "user_id" value
 * @method aBlogEditor setBlogItem()     Sets the current record's "BlogItem" value
 * @method aBlogEditor setEditor()       Sets the current record's "Editor" value
 * 
 * @package    symfony
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseaBlogEditor extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('a_blog_editor');
        $this->hasColumn('blog_item_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('user_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));

        $this->option('type', 'INNODB');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('aBlogItem as BlogItem', array(
             'local' => 'blog_item_id',
             'foreign' => 'id'));

        $this->hasOne('sfGuardUser as Editor', array(
             'local' => 'user_id',
             'foreign' => 'id'));
    }
}