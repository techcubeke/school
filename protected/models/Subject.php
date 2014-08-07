<?php

/**
 * This is the model class for table "subject".
 *
 * The followings are the available columns in table 'subject':
 * @property integer $subjectID
 * @property integer $schoolID
 * @property string $subjectname
 * @property string $subjectgroup
 * @property integer $subjectcode
 * @property string $dateadded
 *
 * The followings are the available model relations:
 * @property Book[] $books
 * @property Curriculum[] $curriculums
 * @property Examrecord[] $examrecords
 * @property Studentsubjectplan[] $studentsubjectplans
 * @property Schoolinfo $school
 * @property Timetable[] $timetables
 */
class Subject extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Subject the static model class
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
		return 'subject';
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
			array('schoolID, subjectcode', 'numerical', 'integerOnly'=>true),
			array('subjectname, subjectgroup', 'length', 'max'=>50),
			array('dateadded', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('subjectID, schoolID, subjectname, subjectgroup, subjectcode, dateadded', 'safe', 'on'=>'search'),
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
			'books' => array(self::HAS_MANY, 'Book', 'subjectID'),
			'curriculums' => array(self::HAS_MANY, 'Curriculum', 'subjectID'),
			'examrecords' => array(self::HAS_MANY, 'Examrecord', 'subjectID'),
			'studentsubjectplans' => array(self::HAS_MANY, 'Studentsubjectplan', 'subjectID'),
			'school' => array(self::BELONGS_TO, 'Schoolinfo', 'schoolID'),
			'timetables' => array(self::HAS_MANY, 'Timetable', 'subjectID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'subjectID' => 'Subject',
			'schoolID' => 'School',
			'subjectname' => 'Subjectname',
			'subjectgroup' => 'Subjectgroup',
			'subjectcode' => 'Subjectcode',
			'dateadded' => 'Dateadded',
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

		$criteria->compare('subjectID',$this->subjectID);
		$criteria->compare('schoolID',$this->schoolID);
		$criteria->compare('subjectname',$this->subjectname,true);
		$criteria->compare('subjectgroup',$this->subjectgroup,true);
		$criteria->compare('subjectcode',$this->subjectcode);
		$criteria->compare('dateadded',$this->dateadded,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}