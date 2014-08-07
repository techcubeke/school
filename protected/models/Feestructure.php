<?php

/**
 * This is the model class for table "feestructure".
 *
 * The followings are the available columns in table 'feestructure':
 * @property integer $feestructureID
 * @property integer $schoolID
 * @property integer $studentID
 * @property string $name
 * @property string $description
 * @property string $amount
 *
 * The followings are the available model relations:
 * @property Student $student
 * @property Schoolinfo $school
 */
class Feestructure extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Feestructure the static model class
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
		return 'feestructure';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('schoolID, studentID', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>100),
			array('amount', 'length', 'max'=>12),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('feestructureID, schoolID, studentID, name, description, amount', 'safe', 'on'=>'search'),
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
			'student' => array(self::BELONGS_TO, 'Student', 'studentID'),
			'school' => array(self::BELONGS_TO, 'Schoolinfo', 'schoolID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'feestructureID' => 'Feestructure',
			'schoolID' => 'School',
			'studentID' => 'Student',
			'name' => 'Name',
			'description' => 'Description',
			'amount' => 'Amount',
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

		$criteria->compare('feestructureID',$this->feestructureID);
		$criteria->compare('schoolID',$this->schoolID);
		$criteria->compare('studentID',$this->studentID);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('amount',$this->amount,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}