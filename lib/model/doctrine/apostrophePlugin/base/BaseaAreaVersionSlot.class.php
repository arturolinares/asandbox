<?php

/**
 * BaseaAreaVersionSlot
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $slot_id
 * @property integer $area_version_id
 * @property integer $permid
 * @property integer $rank
 * @property aAreaVersion $AreaVersion
 * @property aSlot $Slot
 * 
 * @method integer          getSlotId()          Returns the current record's "slot_id" value
 * @method integer          getAreaVersionId()   Returns the current record's "area_version_id" value
 * @method integer          getPermid()          Returns the current record's "permid" value
 * @method integer          getRank()            Returns the current record's "rank" value
 * @method aAreaVersion     getAreaVersion()     Returns the current record's "AreaVersion" value
 * @method aSlot            getSlot()            Returns the current record's "Slot" value
 * @method aAreaVersionSlot setSlotId()          Sets the current record's "slot_id" value
 * @method aAreaVersionSlot setAreaVersionId()   Sets the current record's "area_version_id" value
 * @method aAreaVersionSlot setPermid()          Sets the current record's "permid" value
 * @method aAreaVersionSlot setRank()            Sets the current record's "rank" value
 * @method aAreaVersionSlot setAreaVersion()     Sets the current record's "AreaVersion" value
 * @method aAreaVersionSlot setSlot()            Sets the current record's "Slot" value
 * 
 * @package    asandbox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseaAreaVersionSlot extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('a_area_version_slot');
        $this->hasColumn('slot_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('area_version_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('permid', 'integer', 4, array(
             'type' => 'integer',
             'default' => 1,
             'length' => 4,
             ));
        $this->hasColumn('rank', 'integer', 4, array(
             'type' => 'integer',
             'default' => 1,
             'length' => 4,
             ));


        $this->index('area_version_index', array(
             'fields' => 
             array(
              0 => 'area_version_id',
             ),
             ));
        $this->option('symfony', array(
             'form' => false,
             'filter' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('aAreaVersion as AreaVersion', array(
             'local' => 'area_version_id',
             'foreign' => 'id',
             'onDelete' => 'cascade'));

        $this->hasOne('aSlot as Slot', array(
             'local' => 'slot_id',
             'foreign' => 'id',
             'onDelete' => 'cascade'));
    }
}