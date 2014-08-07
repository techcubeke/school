<?php

/**
 * This is the model class for table "curriculumplan".
 *
 * The followings are the available columns in table 'curriculumplan':
 * @property integer $curriculumplanID
 * @property integer $schoolID
 * @property integer $curriculumID
 * @property integer $bookID
 * @property string $planmonth
 * @property string $topic
 * @property string $subtopic
 * @property string $activity
 * @property integer $iscompleted
 * @property string $dateadded
 * @property string $datemodified
 *
 * The followings are the available model relations:
 * @property Schoolinfo $school
 * @property Curriculum $curriculum
 * @property Book $book
 */
class Curriculumplan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Curriculumplan the static model class
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
		return 'curriculumplan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('schoolID, curriculumID, iscompleted', 'required'),
			array('schoolID, curriculumID, bookID, iscompleted', 'numerical', 'integerOnly'=>true),
			array('planmonth, topic, subtopic, activity', 'length', 'max'=>50),
			array('dateadded, datemodified', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('curriculumplanID, schoolID, curriculumID, bookID, planmonth, topic, subtopic, activity, iscompleted, dateadded, datemodified', 'safe', 'on'=>'search'),
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
			'curriculum' => array(self::BELONGS_TO, 'Curriculum', 'curriculumID'),
			'book' => array(self::BELONGS_TO, 'Book', 'bookID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'curriculumplanID' => 'Curriculumplan',
			'schoolID' => 'School',
			'curriculumID' => 'Curriculum',
			'bookID' => 'Book',
			'planmonth' => 'Planmonth',
			'topic' => 'Topic',
			'subtopic' => 'Subtopic',
			'activity' => 'Activity',
			'iscompleted' => 'Iscompleted',
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

		$criteria->compare('curriculumplanID',$this->curriculumplanID);
		$criteria->compare('schoolID',$this->schoolID);
		$criteria->compare('curriculumID',$this->curriculumID);
		$criteria->compare('bookID',$this->bookID);
		$criteria->compare('planmonth',$this->planmonth,true);
		$criteria->compare('topic',$this->topic,true);
		$criteria->compare('subtopic',$this->subtopic,true);
		$criteria->compare('activity',$this->activity,true);
		$criteria->compare('iscompleted',$this->iscompleted);
		$criteria->compare('dateadded',$this->dateadded,true);
		$criteria->compare('datemodified',$this->datemodified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}