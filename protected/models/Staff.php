<?php

/**
 * This is the model class for table "staff".
 *
 * The followings are the available columns in table 'staff':
 * @property integer $staffID
 * @property integer $schoolID
 * @property string $employeecode
 * @property string $initials
 * @property string $firstname
 * @property string $middlename
 * @property string $lastname
 * @property string $photoimage
 * @property string $employmenttype
 * @property string $gender
 * @property string $dateofbirth
 * @property string $address
 * @property integer $phoneno
 * @property string $email
 * @property string $religion
 * @property string $jobtitle
 * @property string $specialization
 * @property string $maritalstatus
 * @property string $joindate
 * @property string $releasedate
 * @property integer $nationalID
 * @property string $notes
 * @property integer $departmentcode
 *
 * The followings are the available model relations:
 * @property Classroom[] $classrooms
 * @property Person[] $people
 * @property Department $departmentcode0
 * @property Schoolinfo $school
 * @property Timetable[] $timetables
 */
class Staff extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Staff the static model class
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
		return 'staff';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('schoolID, employeecode, firstname, lastname, gender, dateofbirth, phoneno, email, nationalID, departmentcode', 'required'),
			array('schoolID, phoneno, nationalID, departmentcode', 'numerical', 'integerOnly'=>true),
			array('employeecode, employmenttype, address, email', 'length', 'max'=>50),
			array('initials, gender', 'length', 'max'=>11),
			array('firstname, middlename, lastname, religion, jobtitle, specialization, maritalstatus', 'length', 'max'=>20),
			array('photoimage', 'length', 'max'=>100),
			array('joindate, releasedate, notes', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('staffID, schoolID, employeecode, initials, firstname, middlename, lastname, photoimage, employmenttype, gender, dateofbirth, address, phoneno, email, religion, jobtitle, specialization, maritalstatus, joindate, releasedate, nationalID, notes, departmentcode', 'safe', 'on'=>'search'),
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
			'classrooms' => array(self::HAS_MANY, 'Classroom', 'staffID'),
			'people' => array(self::HAS_MANY, 'Person', 'staffID'),
			'departmentcode0' => array(self::BELONGS_TO, 'Department', 'departmentcode'),
			'school' => array(self::BELONGS_TO, 'Schoolinfo', 'schoolID'),
			'timetables' => array(self::HAS_MANY, 'Timetable', 'staffID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'staffID' => 'Staff',
			'schoolID' => 'School',
			'employeecode' => 'Employeecode',
			'initials' => 'Initials',
			'firstname' => 'Firstname',
			'middlename' => 'Middlename',
			'lastname' => 'Lastname',
			'photoimage' => 'Photoimage',
			'employmenttype' => 'Employmenttype',
			'gender' => 'Gender',
			'dateofbirth' => 'Dateofbirth',
			'address' => 'Address',
			'phoneno' => 'Phoneno',
			'email' => 'Email',
			'religion' => 'Religion',
			'jobtitle' => 'Jobtitle',
			'specialization' => 'Specialization',
			'maritalstatus' => 'Maritalstatus',
			'joindate' => 'Joindate',
			'releasedate' => 'Releasedate',
			'nationalID' => 'National',
			'notes' => 'Notes',
			'departmentcode' => 'Departmentcode',
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

		$criteria->compare('staffID',$this->staffID);
		$criteria->compare('schoolID',$this->schoolID);
		$criteria->compare('employeecode',$this->employeecode,true);
		$criteria->compare('initials',$this->initials,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('middlename',$this->middlename,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('photoimage',$this->photoimage,true);
		$criteria->compare('employmenttype',$this->employmenttype,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('dateofbirth',$this->dateofbirth,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('phoneno',$this->phoneno);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('religion',$this->religion,true);
		$criteria->compare('jobtitle',$this->jobtitle,true);
		$criteria->compare('specialization',$this->specialization,true);
		$criteria->compare('maritalstatus',$this->maritalstatus,true);
		$criteria->compare('joindate',$this->joindate,true);
		$criteria->compare('releasedate',$this->releasedate,true);
		$criteria->compare('nationalID',$this->nationalID);
		$criteria->compare('notes',$this->notes,true);
		$criteria->compare('departmentcode',$this->departmentcode);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}