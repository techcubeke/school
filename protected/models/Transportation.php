<?php

/**
 * This is the model class for table "transportation".
 *
 * The followings are the available columns in table 'transportation':
 * @property integer $transportationID
 * @property integer $studentID
 * @property integer $stopID
 * @property integer $ispaid
 *
 * The followings are the available model relations:
 * @property Stopdetails $stop
 * @property Student $student
 */
class Transportation extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Transportation the static model class
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
		return 'transportation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ispaid', 'required'),
			array('studentID, stopID, ispaid', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('transportationID, studentID, stopID, ispaid', 'safe', 'on'=>'search'),
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
			'stop' => array(self::BELONGS_TO, 'Stopdetails', 'stopID'),
			'student' => array(self::BELONGS_TO, 'Student', 'studentID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'transportationID' => 'Transportation',
			'studentID' => 'Student',
			'stopID' => 'Stop',
			'ispaid' => 'Ispaid',
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

		$criteria->compare('transportationID',$this->transportationID);
		$criteria->compare('studentID',$this->studentID);
		$criteria->compare('stopID',$this->stopID);
		$criteria->compare('ispaid',$this->ispaid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}