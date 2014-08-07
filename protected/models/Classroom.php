<?php

/**
 * This is the model class for table "classroom".
 *
 * The followings are the available columns in table 'classroom':
 * @property integer $classID
 * @property integer $schoolID
 * @property integer $classificationID
 * @property string $classname
 * @property integer $staffID
 *
 * The followings are the available model relations:
 * @property Classroomclassification $classification
 * @property Staff $staff
 * @property Schoolinfo $school
 * @property Curriculum[] $curriculums
 * @property Examrecord[] $examrecords
 * @property Feereceipt[] $feereceipts
 * @property Student[] $students
 * @property Timetable[] $timetables
 */
class Classroom extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Classroom the static model class
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
		return 'classroom';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('schoolID, classificationID, classname, staffID', 'required'),
			array('schoolID, classificationID, staffID', 'numerical', 'integerOnly'=>true),
			array('classname', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('classID, schoolID, classificationID, classname, staffID', 'safe', 'on'=>'search'),
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
			'classification' => array(self::BELONGS_TO, 'Classroomclassification', 'classificationID'),
			'staff' => array(self::BELONGS_TO, 'Staff', 'staffID'),
			'school' => array(self::BELONGS_TO, 'Schoolinfo', 'schoolID'),
			'curriculums' => array(self::HAS_MANY, 'Curriculum', 'classID'),
			'examrecords' => array(self::HAS_MANY, 'Examrecord', 'classID'),
			'feereceipts' => array(self::HAS_MANY, 'Feereceipt', 'classID'),
			'students' => array(self::HAS_MANY, 'Student', 'classroom'),
			'timetables' => array(self::HAS_MANY, 'Timetable', 'classID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'classID' => 'Class',
			'schoolID' => 'School',
			'classificationID' => 'Classification',
			'classname' => 'Classname',
			'staffID' => 'Staff',
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

		$criteria->compare('classID',$this->classID);
		$criteria->compare('schoolID',$this->schoolID);
		$criteria->compare('classificationID',$this->classificationID);
		$criteria->compare('classname',$this->classname,true);
		$criteria->compare('staffID',$this->staffID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}