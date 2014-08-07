<?php

/**
 * This is the model class for table "visitorpass".
 *
 * The followings are the available columns in table 'visitorpass':
 * @property integer $visitorpassID
 * @property integer $schoolID
 * @property string $visitorname
 * @property integer $visitorcardnumber
 * @property string $address
 * @property string $contactnumber
 * @property integer $numberofvisitors
 * @property string $visitpurpose
 * @property string $meetingwith
 * @property string $visitdate
 * @property string $intime
 * @property string $outtime
 * @property string $comments
 * @property string $dateadded
 *
 * The followings are the available model relations:
 * @property Schoolinfo $school
 */
class Visitorpass extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Visitorpass the static model class
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
		return 'visitorpass';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('schoolID, visitorname', 'required'),
			array('schoolID, visitorcardnumber, numberofvisitors', 'numerical', 'integerOnly'=>true),
			array('visitorname, contactnumber, visitpurpose, meetingwith', 'length', 'max'=>50),
			array('address, visitdate, intime, outtime, comments, dateadded', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('visitorpassID, schoolID, visitorname, visitorcardnumber, address, contactnumber, numberofvisitors, visitpurpose, meetingwith, visitdate, intime, outtime, comments, dateadded', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'visitorpassID' => 'Visitorpass',
			'schoolID' => 'School',
			'visitorname' => 'Visitorname',
			'visitorcardnumber' => 'Visitorcardnumber',
			'address' => 'Address',
			'contactnumber' => 'Contactnumber',
			'numberofvisitors' => 'Numberofvisitors',
			'visitpurpose' => 'Visitpurpose',
			'meetingwith' => 'Meetingwith',
			'visitdate' => 'Visitdate',
			'intime' => 'Intime',
			'outtime' => 'Outtime',
			'comments' => 'Comments',
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

		$criteria->compare('visitorpassID',$this->visitorpassID);
		$criteria->compare('schoolID',$this->schoolID);
		$criteria->compare('visitorname',$this->visitorname,true);
		$criteria->compare('visitorcardnumber',$this->visitorcardnumber);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('contactnumber',$this->contactnumber,true);
		$criteria->compare('numberofvisitors',$this->numberofvisitors);
		$criteria->compare('visitpurpose',$this->visitpurpose,true);
		$criteria->compare('meetingwith',$this->meetingwith,true);
		$criteria->compare('visitdate',$this->visitdate,true);
		$criteria->compare('intime',$this->intime,true);
		$criteria->compare('outtime',$this->outtime,true);
		$criteria->compare('comments',$this->comments,true);
		$criteria->compare('dateadded',$this->dateadded,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}