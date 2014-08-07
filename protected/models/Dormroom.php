<?php

/**
 * This is the model class for table "dormroom".
 *
 * The followings are the available columns in table 'dormroom':
 * @property integer $dormID
 * @property integer $schoolID
 * @property string $dormname
 * @property integer $beds
 *
 * The followings are the available model relations:
 * @property Schoolinfo $school
 * @property Student[] $students
 */
class Dormroom extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Dormroom the static model class
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
		return 'dormroom';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('schoolID, dormname, beds', 'required'),
			array('schoolID, beds', 'numerical', 'integerOnly'=>true),
			array('dormname', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('dormID, schoolID, dormname, beds', 'safe', 'on'=>'search'),
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
			'students' => array(self::HAS_MANY, 'Student', 'dorm'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'dormID' => 'Dorm',
			'schoolID' => 'School',
			'dormname' => 'Dormname',
			'beds' => 'Beds',
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

		$criteria->compare('dormID',$this->dormID);
		$criteria->compare('schoolID',$this->schoolID);
		$criteria->compare('dormname',$this->dormname,true);
		$criteria->compare('beds',$this->beds);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}