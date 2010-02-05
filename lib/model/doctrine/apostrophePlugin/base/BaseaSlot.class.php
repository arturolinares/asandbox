<?php

/**
 * BaseaSlot
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $type
 * @property string $variant
 * @property clob $value
 * @property Doctrine_Collection $AreaVersionSlots
 * 
 * @method integer             getId()               Returns the current record's "id" value
 * @method string              getType()             Returns the current record's "type" value
 * @method string              getVariant()          Returns the current record's "variant" value
 * @method clob                getValue()            Returns the current record's "value" value
 * @method Doctrine_Collection getAreaVersionSlots() Returns the current record's "AreaVersionSlots" collection
 * @method aSlot               setId()               Sets the current record's "id" value
 * @method aSlot               setType()             Sets the current record's "type" value
 * @method aSlot               setVariant()          Sets the current record's "variant" value
 * @method aSlot               setValue()            Sets the current record's "value" value
 * @method aSlot               setAreaVersionSlots() Sets the current record's "AreaVersionSlots" collection
 * 
 * @package    asandbox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7021 2010-01-12 20:39:49Z lsmith $
 */
abstract class BaseaSlot extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('a_slot');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => '4',
             ));
        $this->hasColumn('type', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('variant', 'string', 100, array(
             'type' => 'string',
             'length' => '100',
             ));
        $this->hasColumn('value', 'clob', null, array(
             'type' => 'clob',
             ));

        $this->option('symfony', array(
             'form' => false,
             'filter' => false,
             ));

        $this->setSubClasses(array(
             'aBlogPostSlot' => 
             array(
              'type' => 'aBlogPost',
             ),
             'aBlogSlot' => 
             array(
              'type' => 'aBlog',
             ),
             'aCalendarSlot' => 
             array(
              'type' => 'aCalendar',
             ),
             'aBlogEventSlot' => 
             array(
              'type' => 'aBlogEvent',
             ),
             'aTextSlot' => 
             array(
              'type' => 'aText',
             ),
             'aRichTextSlot' => 
             array(
              'type' => 'aRichText',
             ),
             'aRawHTMLSlot' => 
             array(
              'type' => 'aRawHTML',
             ),
             'aImageSlot' => 
             array(
              'type' => 'aImage',
             ),
             'aButtonSlot' => 
             array(
              'type' => 'aButton',
             ),
             'aSlideshowSlot' => 
             array(
              'type' => 'aSlideshow',
             ),
             'aVideoSlot' => 
             array(
              'type' => 'aVideo',
             ),
             'aMediaBrowserSlot' => 
             array(
              'type' => 'aMediaBrowser',
             ),
             'aPDFSlot' => 
             array(
              'type' => 'aPDF',
             ),
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('aAreaVersionSlot as AreaVersionSlots', array(
             'local' => 'id',
             'foreign' => 'slot_id'));
    }
}