<?php

/**
 * This is the model class for table "bookissuereturn".
 *
 * The followings are the available columns in table 'bookissuereturn':
 * @property integer $bookissuereturnID
 * @property integer $schoolID
 * @property integer $bookstockID
 * @property integer $personID
 * @property string $dateissue
 * @property string $datereturn
 * @property string $duedate
 * @property string $issuedby
 * @property integer $fine
 * @property integer $isfinepaid
 * @property string $dateadded
 * @property string $datemodified
 *
 * The followings are the available model relations:
 * @property Schoolinfo $school
 * @property Bookstock $bookstock
 * @property Person $person
 */
class Bookissuereturn extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Bookissuereturn the static model class
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
		return 'bookissuereturn';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('schoolID, bookstockID, personID, dateissue, datereturn, duedate, dateadded, datemodified', 'required'),
			array('schoolID, bookstockID, personID, fine, isfinepaid', 'numerical', 'integerOnly'=>true),
			array('issuedby', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('bookissuereturnID, schoolID, bookstockID, personID, dateissue, datereturn, duedate, issuedby, fine, isfinepaid, dateadded, datemodified', 'safe', 'on'=>'search'),
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
			'bookstock' => array(self::BELONGS_TO, 'Bookstock', 'bookstockID'),
			'person' => array(self::BELONGS_TO, 'Person', 'personID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'bookissuereturnID' => 'Bookissuereturn',
			'schoolID' => 'School',
			'bookstockID' => 'Bookstock',
			'personID' => 'Person',
			'dateissue' => 'Dateissue',
			'datereturn' => 'Datereturn',
			'duedate' => 'Duedate',
			'issuedby' => 'Issuedby',
			'fine' => 'Fine',
			'isfinepaid' => 'Isfinepaid',
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

		$criteria->compare('bookissuereturnID',$this->bookissuereturnID);
		$criteria->compare('schoolID',$this->schoolID);
		$criteria->compare('bookstockID',$this->bookstockID);
		$criteria->compare('personID',$this->personID);
		$criteria->compare('dateissue',$this->dateissue,true);
		$criteria->compare('datereturn',$this->datereturn,true);
		$criteria->compare('duedate',$this->duedate,true);
		$criteria->compare('issuedby',$this->issuedby,true);
		$criteria->compare('fine',$this->fine);
		$criteria->compare('isfinepaid',$this->isfinepaid);
		$criteria->compare('dateadded',$this->dateadded,true);
		$criteria->compare('datemodified',$this->datemodified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}