<?php

/**
 * This is the model class for table "curriculum".
 *
 * The followings are the available columns in table 'curriculum':
 * @property integer $curriculumID
 * @property integer $schoolID
 * @property integer $academicsessionID
 * @property integer $classID
 * @property integer $subjectID
 * @property string $dateaded
 * @property string $datemodified
 *
 * The followings are the available model relations:
 * @property Schoolinfo $school
 * @property Academicsession $academicsession
 * @property Classroom $class
 * @property Subject $subject
 * @property Curriculumplan[] $curriculumplans
 */
class Curriculum extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Curriculum the static model class
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
		return 'curriculum';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('schoolID, academicsessionID, classID, subjectID', 'required'),
			array('schoolID, academicsessionID, classID, subjectID', 'numerical', 'integerOnly'=>true),
			array('dateaded, datemodified', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('curriculumID, schoolID, academicsessionID, classID, subjectID, dateaded, datemodified', 'safe', 'on'=>'search'),
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
			'academicsession' => array(self::BELONGS_TO, 'Academicsession', 'academicsessionID'),
			'class' => array(self::BELONGS_TO, 'Classroom', 'classID'),
			'subject' => array(self::BELONGS_TO, 'Subject', 'subjectID'),
			'curriculumplans' => array(self::HAS_MANY, 'Curriculumplan', 'curriculumID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'curriculumID' => 'Curriculum',
			'schoolID' => 'School',
			'academicsessionID' => 'Academicsession',
			'classID' => 'Class',
			'subjectID' => 'Subject',
			'dateaded' => 'Dateaded',
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

		$criteria->compare('curriculumID',$this->curriculumID);
		$criteria->compare('schoolID',$this->schoolID);
		$criteria->compare('academicsessionID',$this->academicsessionID);
		$criteria->compare('classID',$this->classID);
		$criteria->compare('subjectID',$this->subjectID);
		$criteria->compare('dateaded',$this->dateaded,true);
		$criteria->compare('datemodified',$this->datemodified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}