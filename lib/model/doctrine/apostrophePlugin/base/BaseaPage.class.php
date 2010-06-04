<?php

/**
 * BaseaPage
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $slug
 * @property string $template
 * @property boolean $view_is_secure
 * @property boolean $archived
 * @property boolean $admin
 * @property integer $author_id
 * @property integer $deleter_id
 * @property string $engine
 * @property sfGuardUser $Author
 * @property sfGuardUser $Deleter
 * @property Doctrine_Collection $Areas
 * @property Doctrine_Collection $Accesses
 * @property Doctrine_Collection $aLuceneUpdate
 * @property Doctrine_Collection $MediaCategories
 * @property Doctrine_Collection $aMediaPageCategory
 * 
 * @method integer             getId()                 Returns the current record's "id" value
 * @method string              getSlug()               Returns the current record's "slug" value
 * @method string              getTemplate()           Returns the current record's "template" value
 * @method boolean             getViewIsSecure()       Returns the current record's "view_is_secure" value
 * @method boolean             getArchived()           Returns the current record's "archived" value
 * @method boolean             getAdmin()              Returns the current record's "admin" value
 * @method integer             getAuthorId()           Returns the current record's "author_id" value
 * @method integer             getDeleterId()          Returns the current record's "deleter_id" value
 * @method string              getEngine()             Returns the current record's "engine" value
 * @method sfGuardUser         getAuthor()             Returns the current record's "Author" value
 * @method sfGuardUser         getDeleter()            Returns the current record's "Deleter" value
 * @method Doctrine_Collection getAreas()              Returns the current record's "Areas" collection
 * @method Doctrine_Collection getAccesses()           Returns the current record's "Accesses" collection
 * @method Doctrine_Collection getALuceneUpdate()      Returns the current record's "aLuceneUpdate" collection
 * @method Doctrine_Collection getMediaCategories()    Returns the current record's "MediaCategories" collection
 * @method Doctrine_Collection getAMediaPageCategory() Returns the current record's "aMediaPageCategory" collection
 * @method aPage               setId()                 Sets the current record's "id" value
 * @method aPage               setSlug()               Sets the current record's "slug" value
 * @method aPage               setTemplate()           Sets the current record's "template" value
 * @method aPage               setViewIsSecure()       Sets the current record's "view_is_secure" value
 * @method aPage               setArchived()           Sets the current record's "archived" value
 * @method aPage               setAdmin()              Sets the current record's "admin" value
 * @method aPage               setAuthorId()           Sets the current record's "author_id" value
 * @method aPage               setDeleterId()          Sets the current record's "deleter_id" value
 * @method aPage               setEngine()             Sets the current record's "engine" value
 * @method aPage               setAuthor()             Sets the current record's "Author" value
 * @method aPage               setDeleter()            Sets the current record's "Deleter" value
 * @method aPage               setAreas()              Sets the current record's "Areas" collection
 * @method aPage               setAccesses()           Sets the current record's "Accesses" collection
 * @method aPage               setALuceneUpdate()      Sets the current record's "aLuceneUpdate" collection
 * @method aPage               setMediaCategories()    Sets the current record's "MediaCategories" collection
 * @method aPage               setAMediaPageCategory() Sets the current record's "aMediaPageCategory" collection
 * 
 * @package    symfony
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseaPage extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('a_page');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('slug', 'string', 255, array(
             'type' => 'string',
             'unique' => true,
             'length' => 255,
             ));
        $this->hasColumn('template', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('view_is_secure', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('archived', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('admin', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('author_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('deleter_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('engine', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));


        $this->index('slugindex', array(
             'fields' => 
             array(
              0 => 'slug',
             ),
             ));
        $this->index('engineindex', array(
             'fields' => 
             array(
              0 => 'engine',
             ),
             ));
        $this->option('type', 'INNODB');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfGuardUser as Author', array(
             'local' => 'author_id',
             'foreign' => 'id'));

        $this->hasOne('sfGuardUser as Deleter', array(
             'local' => 'author_id',
             'foreign' => 'id'));

        $this->hasMany('aArea as Areas', array(
             'local' => 'id',
             'foreign' => 'page_id'));

        $this->hasMany('aAccess as Accesses', array(
             'local' => 'id',
             'foreign' => 'page_id'));

        $this->hasMany('aLuceneUpdate', array(
             'local' => 'id',
             'foreign' => 'page_id'));

        $this->hasMany('aMediaCategory as MediaCategories', array(
             'refClass' => 'aMediaPageCategory',
             'local' => 'page_id',
             'foreign' => 'media_category_id'));

        $this->hasMany('aMediaPageCategory', array(
             'local' => 'id',
             'foreign' => 'page_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $nestedset0 = new Doctrine_Template_NestedSet(array(
             ));
        $this->actAs($timestampable0);
        $this->actAs($nestedset0);
    }
}