<?php

/**
 * This is the model class for table "fuelconsumption".
 *
 * The followings are the available columns in table 'fuelconsumption':
 * @property integer $fuelID
 * @property integer $vehicleID
 * @property string $fuelconsumed
 * @property string $amount
 * @property string $consumeddate
 *
 * The followings are the available model relations:
 * @property Vehicle $vehicle
 */
class Fuelconsumption extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Fuelconsumption the static model class
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
		return 'fuelconsumption';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('consumeddate', 'required'),
			array('vehicleID', 'numerical', 'integerOnly'=>true),
			array('fuelconsumed, amount', 'length', 'max'=>120),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('fuelID, vehicleID, fuelconsumed, amount, consumeddate', 'safe', 'on'=>'search'),
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
			'vehicle' => array(self::BELONGS_TO, 'Vehicle', 'vehicleID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'fuelID' => 'Fuel',
			'vehicleID' => 'Vehicle',
			'fuelconsumed' => 'Fuelconsumed',
			'amount' => 'Amount',
			'consumeddate' => 'Consumeddate',
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

		$criteria->compare('fuelID',$this->fuelID);
		$criteria->compare('vehicleID',$this->vehicleID);
		$criteria->compare('fuelconsumed',$this->fuelconsumed,true);
		$criteria->compare('amount',$this->amount,true);
		$criteria->compare('consumeddate',$this->consumeddate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}