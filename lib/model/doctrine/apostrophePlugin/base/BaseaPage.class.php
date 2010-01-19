<?php

/**
 * BaseaPage
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $slug
 * @property string $template
 * @property boolean $is_published
 * @property boolean $view_is_secure
 * @property boolean $archived
 * @property integer $author_id
 * @property integer $deleter_id
 * @property string $engine
 * @property sfGuardUser $Author
 * @property sfGuardUser $Deleter
 * @property Doctrine_Collection $Areas
 * @property Doctrine_Collection $Accesses
 * @property Doctrine_Collection $aLuceneUpdate
 * 
 * @method integer             getId()             Returns the current record's "id" value
 * @method string              getSlug()           Returns the current record's "slug" value
 * @method string              getTemplate()       Returns the current record's "template" value
 * @method boolean             getIsPublished()    Returns the current record's "is_published" value
 * @method boolean             getViewIsSecure()   Returns the current record's "view_is_secure" value
 * @method boolean             getArchived()       Returns the current record's "archived" value
 * @method integer             getAuthorId()       Returns the current record's "author_id" value
 * @method integer             getDeleterId()      Returns the current record's "deleter_id" value
 * @method string              getEngine()         Returns the current record's "engine" value
 * @method sfGuardUser         getAuthor()         Returns the current record's "Author" value
 * @method sfGuardUser         getDeleter()        Returns the current record's "Deleter" value
 * @method Doctrine_Collection getAreas()          Returns the current record's "Areas" collection
 * @method Doctrine_Collection getAccesses()       Returns the current record's "Accesses" collection
 * @method Doctrine_Collection getALuceneUpdate()  Returns the current record's "aLuceneUpdate" collection
 * @method aPage               setId()             Sets the current record's "id" value
 * @method aPage               setSlug()           Sets the current record's "slug" value
 * @method aPage               setTemplate()       Sets the current record's "template" value
 * @method aPage               setIsPublished()    Sets the current record's "is_published" value
 * @method aPage               setViewIsSecure()   Sets the current record's "view_is_secure" value
 * @method aPage               setArchived()       Sets the current record's "archived" value
 * @method aPage               setAuthorId()       Sets the current record's "author_id" value
 * @method aPage               setDeleterId()      Sets the current record's "deleter_id" value
 * @method aPage               setEngine()         Sets the current record's "engine" value
 * @method aPage               setAuthor()         Sets the current record's "Author" value
 * @method aPage               setDeleter()        Sets the current record's "Deleter" value
 * @method aPage               setAreas()          Sets the current record's "Areas" collection
 * @method aPage               setAccesses()       Sets the current record's "Accesses" collection
 * @method aPage               setALuceneUpdate()  Sets the current record's "aLuceneUpdate" collection
 * 
 * @package    asandbox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7021 2010-01-12 20:39:49Z lsmith $
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
             'length' => '4',
             ));
        $this->hasColumn('slug', 'string', 255, array(
             'type' => 'string',
             'unique' => true,
             'length' => '255',
             ));
        $this->hasColumn('template', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('is_published', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('view_is_secure', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('archived', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('author_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('deleter_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('engine', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
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

        $timestampable0 = new Doctrine_Template_Timestampable();
        $nestedset0 = new Doctrine_Template_NestedSet();
        $this->actAs($timestampable0);
        $this->actAs($nestedset0);
    }
}