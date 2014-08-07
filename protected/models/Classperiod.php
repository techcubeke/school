<?php

/**
 * This is the model class for table "classperiod".
 *
 * The followings are the available columns in table 'classperiod':
 * @property integer $periodID
 * @property string $name
 * @property string $starttime
 * @property string $endtime
 * @property integer $break
 *
 * The followings are the available model relations:
 * @property Timetable[] $timetables
 */
class Classperiod extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Classperiod the static model class
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
		return 'classperiod';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('break', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>100),
			array('starttime, endtime', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('periodID, name, starttime, endtime, break', 'safe', 'on'=>'search'),
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
			'timetables' => array(self::HAS_MANY, 'Timetable', 'periodID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'periodID' => 'Period',
			'name' => 'Name',
			'starttime' => 'Starttime',
			'endtime' => 'Endtime',
			'break' => 'Break',
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

		$criteria->compare('periodID',$this->periodID);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('starttime',$this->starttime,true);
		$criteria->compare('endtime',$this->endtime,true);
		$criteria->compare('break',$this->break);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}