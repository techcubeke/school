<?php

/**
 * This is the model class for table "department".
 *
 * The followings are the available columns in table 'department':
 * @property integer $departmentID
 * @property integer $schoolID
 * @property integer $departmentcode
 * @property string $departmentname
 * @property string $description
 * @property string $roomno
 *
 * The followings are the available model relations:
 * @property Asset[] $assets
 * @property Schoolinfo $school
 * @property Staff[] $staffs
 */
class Department extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Department the static model class
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
		return 'department';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('schoolID, departmentcode, departmentname, roomno', 'required'),
			array('schoolID, departmentcode', 'numerical', 'integerOnly'=>true),
			array('departmentname', 'length', 'max'=>50),
			array('roomno', 'length', 'max'=>20),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('departmentID, schoolID, departmentcode, departmentname, description, roomno', 'safe', 'on'=>'search'),
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
			'assets' => array(self::HAS_MANY, 'Asset', 'departmentcode'),
			'school' => array(self::BELONGS_TO, 'Schoolinfo', 'schoolID'),
			'staffs' => array(self::HAS_MANY, 'Staff', 'departmentcode'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'departmentID' => 'Department',
			'schoolID' => 'School',
			'departmentcode' => 'Departmentcode',
			'departmentname' => 'Departmentname',
			'description' => 'Description',
			'roomno' => 'Roomno',
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

		$criteria->compare('departmentID',$this->departmentID);
		$criteria->compare('schoolID',$this->schoolID);
		$criteria->compare('departmentcode',$this->departmentcode);
		$criteria->compare('departmentname',$this->departmentname,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('roomno',$this->roomno,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}