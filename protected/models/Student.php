<?php

/**
 * This is the model class for table "student".
 *
 * The followings are the available columns in table 'student':
 * @property integer $studentID
 * @property integer $schoolID
 * @property integer $academicsessionID
 * @property string $adminno
 * @property string $firstname
 * @property string $middlename
 * @property string $lastname
 * @property string $dateofbirth
 * @property string $citizenship
 * @property string $parentname
 * @property string $photoimage
 * @property integer $emergencynumber
 * @property string $postaladress
 * @property string $email
 * @property string $classroom
 * @property string $admindate
 * @property string $gender
 * @property string $dorm
 * @property string $religion
 *
 * The followings are the available model relations:
 * @property Examrecord[] $examrecords
 * @property Feereceipt[] $feereceipts
 * @property Feestructure[] $feestructures
 * @property Parent[] $parents
 * @property Person[] $people
 * @property Dormroom $dorm0
 * @property Classroom $classroom0
 * @property Academicsession $academicsession
 * @property Schoolinfo $school
 * @property Studentsubjectplan[] $studentsubjectplans
 * @property Transportation[] $transportations
 */
class Student extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Student the static model class
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
		return 'student';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('schoolID, adminno, firstname, dateofbirth, parentname, emergencynumber, classroom, admindate', 'required'),
			array('schoolID, academicsessionID, emergencynumber', 'numerical', 'integerOnly'=>true),
			array('adminno, firstname, middlename, lastname, citizenship, parentname, gender', 'length', 'max'=>33),
			array('photoimage', 'length', 'max'=>100),
			array('postaladress, email, classroom, religion', 'length', 'max'=>45),
			array('dorm', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('studentID, schoolID, academicsessionID, adminno, firstname, middlename, lastname, dateofbirth, citizenship, parentname, photoimage, emergencynumber, postaladress, email, classroom, admindate, gender, dorm, religion', 'safe', 'on'=>'search'),
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
			'examrecords' => array(self::HAS_MANY, 'Examrecord', 'studentID'),
			'feereceipts' => array(self::HAS_MANY, 'Feereceipt', 'studentID'),
			'feestructures' => array(self::HAS_MANY, 'Feestructure', 'studentID'),
			'parents' => array(self::HAS_MANY, 'Parent', 'studentID'),
			'people' => array(self::HAS_MANY, 'Person', 'studentID'),
			'dorm0' => array(self::BELONGS_TO, 'Dormroom', 'dorm'),
			'classroom0' => array(self::BELONGS_TO, 'Classroom', 'classroom'),
			'academicsession' => array(self::BELONGS_TO, 'Academicsession', 'academicsessionID'),
			'school' => array(self::BELONGS_TO, 'Schoolinfo', 'schoolID'),
			'studentsubjectplans' => array(self::HAS_MANY, 'Studentsubjectplan', 'studentID'),
			'transportations' => array(self::HAS_MANY, 'Transportation', 'studentID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'studentID' => 'Student',
			'schoolID' => 'School',
			'academicsessionID' => 'Academicsession',
			'adminno' => 'Adminno',
			'firstname' => 'Firstname',
			'middlename' => 'Middlename',
			'lastname' => 'Lastname',
			'dateofbirth' => 'Dateofbirth',
			'citizenship' => 'Citizenship',
			'parentname' => 'Parentname',
			'photoimage' => 'Photoimage',
			'emergencynumber' => 'Emergencynumber',
			'postaladress' => 'Postaladress',
			'email' => 'Email',
			'classroom' => 'Classroom',
			'admindate' => 'Admindate',
			'gender' => 'Gender',
			'dorm' => 'Dorm',
			'religion' => 'Religion',
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

		$criteria->compare('studentID',$this->studentID);
		$criteria->compare('schoolID',$this->schoolID);
		$criteria->compare('academicsessionID',$this->academicsessionID);
		$criteria->compare('adminno',$this->adminno,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('middlename',$this->middlename,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('dateofbirth',$this->dateofbirth,true);
		$criteria->compare('citizenship',$this->citizenship,true);
		$criteria->compare('parentname',$this->parentname,true);
		$criteria->compare('photoimage',$this->photoimage,true);
		$criteria->compare('emergencynumber',$this->emergencynumber);
		$criteria->compare('postaladress',$this->postaladress,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('classroom',$this->classroom,true);
		$criteria->compare('admindate',$this->admindate,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('dorm',$this->dorm,true);
		$criteria->compare('religion',$this->religion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}