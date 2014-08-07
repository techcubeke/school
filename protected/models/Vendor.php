<?php

/**
 * This is the model class for table "vendor".
 *
 * The followings are the available columns in table 'vendor':
 * @property integer $vendorID
 * @property integer $schoolID
 * @property string $initials
 * @property string $photoimage
 * @property string $firstname
 * @property string $lastname
 * @property string $vendortype
 * @property string $address
 * @property integer $phoneno
 * @property string $email
 * @property string $dateadded
 * @property string $notes
 *
 * The followings are the available model relations:
 * @property Bookstock[] $bookstocks
 * @property Person[] $people
 * @property Schoolinfo $school
 */
class Vendor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Vendor the static model class
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
		return 'vendor';
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
			array('schoolID, phoneno', 'numerical', 'integerOnly'=>true),
			array('initials', 'length', 'max'=>11),
			array('photoimage, firstname, lastname, vendortype, address, email', 'length', 'max'=>50),
			array('dateadded, notes', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('vendorID, schoolID, initials, photoimage, firstname, lastname, vendortype, address, phoneno, email, dateadded, notes', 'safe', 'on'=>'search'),
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
			'bookstocks' => array(self::HAS_MANY, 'Bookstock', 'vendorID'),
			'people' => array(self::HAS_MANY, 'Person', 'vendorID'),
			'school' => array(self::BELONGS_TO, 'Schoolinfo', 'schoolID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'vendorID' => 'Vendor',
			'schoolID' => 'School',
			'initials' => 'Initials',
			'photoimage' => 'Photoimage',
			'firstname' => 'Firstname',
			'lastname' => 'Lastname',
			'vendortype' => 'Vendortype',
			'address' => 'Address',
			'phoneno' => 'Phoneno',
			'email' => 'Email',
			'dateadded' => 'Dateadded',
			'notes' => 'Notes',
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

		$criteria->compare('vendorID',$this->vendorID);
		$criteria->compare('schoolID',$this->schoolID);
		$criteria->compare('initials',$this->initials,true);
		$criteria->compare('photoimage',$this->photoimage,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('vendortype',$this->vendortype,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('phoneno',$this->phoneno);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('dateadded',$this->dateadded,true);
		$criteria->compare('notes',$this->notes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}