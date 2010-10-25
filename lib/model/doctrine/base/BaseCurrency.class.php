<?php

/**
 * BaseCurrency
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $code
 * @property string $number
 * @property string $name
 * @property string $locations
 * @property integer $digits
 * 
 * @method string   getCode()      Returns the current record's "code" value
 * @method string   getNumber()    Returns the current record's "number" value
 * @method string   getName()      Returns the current record's "name" value
 * @method string   getLocations() Returns the current record's "locations" value
 * @method integer  getDigits()    Returns the current record's "digits" value
 * @method Currency setCode()      Sets the current record's "code" value
 * @method Currency setNumber()    Sets the current record's "number" value
 * @method Currency setName()      Sets the current record's "name" value
 * @method Currency setLocations() Sets the current record's "locations" value
 * @method Currency setDigits()    Sets the current record's "digits" value
 * 
 * @package    currency-converter
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCurrency extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('currency');
        $this->hasColumn('code', 'string', 3, array(
             'type' => 'string',
             'primary' => true,
             'length' => 3,
             ));
        $this->hasColumn('number', 'string', 3, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 3,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('locations', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('digits', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 1,
             ));

        $this->option('orderBy', 'code ASC');
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}