<?php

/**
 * BasesfGuardUserPermission
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $user_id
 * @property integer $permission_id
 * @property sfGuardUser $sfGuardUser
 * @property sfGuardPermission $sfGuardPermission
 * 
 * @method integer               getUserId()            Returns the current record's "user_id" value
 * @method integer               getPermissionId()      Returns the current record's "permission_id" value
 * @method sfGuardUser           getSfGuardUser()       Returns the current record's "sfGuardUser" value
 * @method sfGuardPermission     getSfGuardPermission() Returns the current record's "sfGuardPermission" value
 * @method sfGuardUserPermission setUserId()            Sets the current record's "user_id" value
 * @method sfGuardUserPermission setPermissionId()      Sets the current record's "permission_id" value
 * @method sfGuardUserPermission setSfGuardUser()       Sets the current record's "sfGuardUser" value
 * @method sfGuardUserPermission setSfGuardPermission() Sets the current record's "sfGuardPermission" value
 * 
 * @package    asandbox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7021 2010-01-12 20:39:49Z lsmith $
 */
abstract class BasesfGuardUserPermission extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('sf_guard_user_permission');
        $this->hasColumn('user_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '4',
             ));
        $this->hasColumn('permission_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => '4',
             ));

        $this->option('symfony', array(
             'form' => false,
             'filter' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('sfGuardUser', array(
             'local' => 'user_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('sfGuardPermission', array(
             'local' => 'permission_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}