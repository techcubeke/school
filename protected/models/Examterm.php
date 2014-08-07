<?php

/**
 * This is the model class for table "examterm".
 *
 * The followings are the available columns in table 'examterm':
 * @property integer $examtermID
 * @property integer $schoolID
 * @property string $examtermname
 * @property string $dateadded
 *
 * The followings are the available model relations:
 * @property Examrecord[] $examrecords
 * @property Schoolinfo $school
 */
class Examterm extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Examterm the static model class
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
		return 'examterm';
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
			array('schoolID', 'numerical', 'integerOnly'=>true),
			array('examtermname', 'length', 'max'=>50),
			array('dateadded', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('examtermID, schoolID, examtermname, dateadded', 'safe', 'on'=>'search'),
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
			'examrecords' => array(self::HAS_MANY, 'Examrecord', 'examtermID'),
			'school' => array(self::BELONGS_TO, 'Schoolinfo', 'schoolID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'examtermID' => 'Examterm',
			'schoolID' => 'School',
			'examtermname' => 'Examtermname',
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

		$criteria->compare('examtermID',$this->examtermID);
		$criteria->compare('schoolID',$this->schoolID);
		$criteria->compare('examtermname',$this->examtermname,true);
		$criteria->compare('dateadded',$this->dateadded,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}