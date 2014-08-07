<?php

/**
 * This is the model class for table "studentsubjectplan".
 *
 * The followings are the available columns in table 'studentsubjectplan':
 * @property integer $subjectplanID
 * @property integer $schoolID
 * @property integer $academicsessionID
 * @property integer $studentID
 * @property integer $subjectID
 * @property string $dateadded
 * @property string $datemodified
 *
 * The followings are the available model relations:
 * @property Schoolinfo $school
 * @property Academicsession $academicsession
 * @property Student $student
 * @property Subject $subject
 */
class Studentsubjectplan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Studentsubjectplan the static model class
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
		return 'studentsubjectplan';
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
			array('schoolID, academicsessionID, studentID, subjectID', 'numerical', 'integerOnly'=>true),
			array('dateadded, datemodified', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('subjectplanID, schoolID, academicsessionID, studentID, subjectID, dateadded, datemodified', 'safe', 'on'=>'search'),
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
			'student' => array(self::BELONGS_TO, 'Student', 'studentID'),
			'subject' => array(self::BELONGS_TO, 'Subject', 'subjectID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'subjectplanID' => 'Subjectplan',
			'schoolID' => 'School',
			'academicsessionID' => 'Academicsession',
			'studentID' => 'Student',
			'subjectID' => 'Subject',
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

		$criteria->compare('subjectplanID',$this->subjectplanID);
		$criteria->compare('schoolID',$this->schoolID);
		$criteria->compare('academicsessionID',$this->academicsessionID);
		$criteria->compare('studentID',$this->studentID);
		$criteria->compare('subjectID',$this->subjectID);
		$criteria->compare('dateadded',$this->dateadded,true);
		$criteria->compare('datemodified',$this->datemodified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}