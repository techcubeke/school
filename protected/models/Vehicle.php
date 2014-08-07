<?php

/**
 * This is the model class for table "vehicle".
 *
 * The followings are the available columns in table 'vehicle':
 * @property integer $vehicleID
 * @property integer $schoolID
 * @property string $vehicleregnumber
 * @property integer $manufacturingyear
 * @property string $vehicletype
 * @property integer $sitingcapacity
 * @property string $status
 * @property string $dateadded
 * @property string $datemodified
 *
 * The followings are the available model relations:
 * @property Fuelconsumption[] $fuelconsumptions
 * @property Route[] $routes
 * @property Schoolinfo $school
 */
class Vehicle extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Vehicle the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vehicle';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('schoolID', 'required'),
			array('schoolID, manufacturingyear, sitingcapacity', 'numerical', 'integerOnly'=>true),
			array('vehicleregnumber, vehicletype', 'length', 'max'=>50),
			array('status, dateadded, datemodified', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('vehicleID, schoolID, vehicleregnumber, manufacturingyear, vehicletype, sitingcapacity, status, dateadded, datemodified', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'fuelconsumptions' => array(self::HAS_MANY, 'Fuelconsumption', 'vehicleID'),
			'routes' => array(self::HAS_MANY, 'Route', 'vehicleID'),
			'school' => array(self::BELONGS_TO, 'Schoolinfo', 'schoolID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'vehicleID' => 'Vehicle',
			'schoolID' => 'School',
			'vehicleregnumber' => 'Vehicleregnumber',
			'manufacturingyear' => 'Manufacturingyear',
			'vehicletype' => 'Vehicletype',
			'sitingcapacity' => 'Sitingcapacity',
			'status' => 'Status',
			'dateadded' => 'Dateadded',
			'datemodified' => 'Datemodified',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('vehicleID',$this->vehicleID);
		$criteria->compare('schoolID',$this->schoolID);
		$criteria->compare('vehicleregnumber',$this->vehicleregnumber,true);
		$criteria->compare('manufacturingyear',$this->manufacturingyear);
		$criteria->compare('vehicletype',$this->vehicletype,true);
		$criteria->compare('sitingcapacity',$this->sitingcapacity);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('dateadded',$this->dateadded,true);
		$criteria->compare('datemodified',$this->datemodified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}