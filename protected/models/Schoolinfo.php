<?php

/**
 * This is the model class for table "schoolinfo".
 *
 * The followings are the available columns in table 'schoolinfo':
 * @property integer $ID
 * @property string $schoolname
 * @property string $logo
 * @property string $motto
 * @property string $principal
 * @property string $foundationdate
 * @property string $foundedby
 * @property string $phoneno
 * @property string $website
 * @property string $email
 * @property string $city
 * @property string $zippostal
 * @property string $addressline1
 * @property string $addressline2
 * @property string $about
 *
 * The followings are the available model relations:
 * @property Academicsession[] $academicsessions
 * @property Asset[] $assets
 * @property Book[] $books
 * @property Bookissuereturn[] $bookissuereturns
 * @property Bookstock[] $bookstocks
 * @property Classroom[] $classrooms
 * @property Curriculum[] $curriculums
 * @property Curriculumplan[] $curriculumplans
 * @property Department[] $departments
 * @property Dormroom[] $dormrooms
 * @property Eventplan[] $eventplans
 * @property Examrecord[] $examrecords
 * @property Examterm[] $examterms
 * @property Feepayment[] $feepayments
 * @property Feereceipt[] $feereceipts
 * @property Feestructure[] $feestructures
 * @property Feetermdate[] $feetermdates
 * @property Financialyear[] $financialyears
 * @property Parent[] $parents
 * @property Person[] $people
 * @property Staff[] $staffs
 * @property Student[] $students
 * @property Studentsubjectplan[] $studentsubjectplans
 * @property Subject[] $subjects
 * @property Timetable[] $timetables
 * @property User[] $users
 * @property Vehicle[] $vehicles
 * @property Vendor[] $vendors
 * @property Visitorpass[] $visitorpasses
 */
class Schoolinfo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Schoolinfo the static model class
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
		return 'schoolinfo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID, schoolname, logo, motto, principal, phoneno, website, email, city, zippostal, addressline1, addressline2, about', 'required'),
			array('ID', 'numerical', 'integerOnly'=>true),
			array('schoolname, principal, foundedby, phoneno, email, addressline1, addressline2', 'length', 'max'=>50),
			array('motto, website', 'length', 'max'=>100),
			array('city, zippostal', 'length', 'max'=>20),
			array('foundationdate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, schoolname, logo, motto, principal, foundationdate, foundedby, phoneno, website, email, city, zippostal, addressline1, addressline2, about', 'safe', 'on'=>'search'),
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
			'academicsessions' => array(self::HAS_MANY, 'Academicsession', 'schoolID'),
			'assets' => array(self::HAS_MANY, 'Asset', 'schoolID'),
			'books' => array(self::HAS_MANY, 'Book', 'schoolID'),
			'bookissuereturns' => array(self::HAS_MANY, 'Bookissuereturn', 'schoolID'),
			'bookstocks' => array(self::HAS_MANY, 'Bookstock', 'schoolID'),
			'classrooms' => array(self::HAS_MANY, 'Classroom', 'schoolID'),
			'curriculums' => array(self::HAS_MANY, 'Curriculum', 'schoolID'),
			'curriculumplans' => array(self::HAS_MANY, 'Curriculumplan', 'schoolID'),
			'departments' => array(self::HAS_MANY, 'Department', 'schoolID'),
			'dormrooms' => array(self::HAS_MANY, 'Dormroom', 'schoolID'),
			'eventplans' => array(self::HAS_MANY, 'Eventplan', 'schoolID'),
			'examrecords' => array(self::HAS_MANY, 'Examrecord', 'schoolID'),
			'examterms' => array(self::HAS_MANY, 'Examterm', 'schoolID'),
			'feepayments' => array(self::HAS_MANY, 'Feepayment', 'schoolID'),
			'feereceipts' => array(self::HAS_MANY, 'Feereceipt', 'schoolID'),
			'feestructures' => array(self::HAS_MANY, 'Feestructure', 'schoolID'),
			'feetermdates' => array(self::HAS_MANY, 'Feetermdate', 'schoolID'),
			'financialyears' => array(self::HAS_MANY, 'Financialyear', 'schoolID'),
			'parents' => array(self::HAS_MANY, 'Parent', 'schoolID'),
			'people' => array(self::HAS_MANY, 'Person', 'schoolID'),
			'staffs' => array(self::HAS_MANY, 'Staff', 'schoolID'),
			'students' => array(self::HAS_MANY, 'Student', 'schoolID'),
			'studentsubjectplans' => array(self::HAS_MANY, 'Studentsubjectplan', 'schoolID'),
			'subjects' => array(self::HAS_MANY, 'Subject', 'schoolID'),
			'timetables' => array(self::HAS_MANY, 'Timetable', 'schoolID'),
			'users' => array(self::HAS_MANY, 'User', 'schoolID'),
			'vehicles' => array(self::HAS_MANY, 'Vehicle', 'schoolID'),
			'vendors' => array(self::HAS_MANY, 'Vendor', 'schoolID'),
			'visitorpasses' => array(self::HAS_MANY, 'Visitorpass', 'schoolID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'schoolname' => 'Schoolname',
			'logo' => 'Logo',
			'motto' => 'Motto',
			'principal' => 'Principal',
			'foundationdate' => 'Foundationdate',
			'foundedby' => 'Foundedby',
			'phoneno' => 'Phoneno',
			'website' => 'Website',
			'email' => 'Email',
			'city' => 'City',
			'zippostal' => 'Zippostal',
			'addressline1' => 'Addressline1',
			'addressline2' => 'Addressline2',
			'about' => 'About',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('schoolname',$this->schoolname,true);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('motto',$this->motto,true);
		$criteria->compare('principal',$this->principal,true);
		$criteria->compare('foundationdate',$this->foundationdate,true);
		$criteria->compare('foundedby',$this->foundedby,true);
		$criteria->compare('phoneno',$this->phoneno,true);
		$criteria->compare('website',$this->website,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('zippostal',$this->zippostal,true);
		$criteria->compare('addressline1',$this->addressline1,true);
		$criteria->compare('addressline2',$this->addressline2,true);
		$criteria->compare('about',$this->about,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}