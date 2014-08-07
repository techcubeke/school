<?php

/**
 * This is the model class for table "eventplan".
 *
 * The followings are the available columns in table 'eventplan':
 * @property integer $eventID
 * @property integer $schoolID
 * @property string $eventname
 * @property string $description
 * @property string $eventtype
 * @property string $eventfrom
 * @property string $eventto
 * @property integer $isworkingday
 * @property string $dateadded
 * @property string $datemodified
 *
 * The followings are the available model relations:
 * @property Schoolinfo $school
 */
class Eventplan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Eventplan the static model class
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
		return 'eventplan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('schoolID, isworkingday, dateadded', 'required'),
			array('schoolID, isworkingday', 'numerical', 'integerOnly'=>true),
			array('eventname, eventtype', 'length', 'max'=>50),
			array('description, eventfrom, eventto, datemodified', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('eventID, schoolID, eventname, description, eventtype, eventfrom, eventto, isworkingday, dateadded, datemodified', 'safe', 'on'=>'search'),
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
			'school' => array(self::BELONGS_TO, 'Schoolinfo', 'schoolID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'eventID' => 'Event',
			'schoolID' => 'School',
			'eventname' => 'Eventname',
			'description' => 'Description',
			'eventtype' => 'Eventtype',
			'eventfrom' => 'Eventfrom',
			'eventto' => 'Eventto',
			'isworkingday' => 'Isworkingday',
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

		$criteria->compare('eventID',$this->eventID);
		$criteria->compare('schoolID',$this->schoolID);
		$criteria->compare('eventname',$this->eventname,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('eventtype',$this->eventtype,true);
		$criteria->compare('eventfrom',$this->eventfrom,true);
		$criteria->compare('eventto',$this->eventto,true);
		$criteria->compare('isworkingday',$this->isworkingday);
		$criteria->compare('dateadded',$this->dateadded,true);
		$criteria->compare('datemodified',$this->datemodified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}