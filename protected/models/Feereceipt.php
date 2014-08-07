<?php

/**
 * This is the model class for table "feereceipt".
 *
 * The followings are the available columns in table 'feereceipt':
 * @property integer $feereceiptID
 * @property integer $schoolID
 * @property integer $studentID
 * @property integer $classID
 * @property string $invoicedate
 * @property string $termtitle
 * @property string $periodfrom
 * @property string $periodto
 * @property string $previousinvoiceamount
 * @property string $previousamount
 * @property string $duedate
 * @property string $adjustedamount
 * @property string $totalamount
 * @property string $dateadded
 *
 * The followings are the available model relations:
 * @property Feepayment[] $feepayments
 * @property Classroom $class
 * @property Schoolinfo $school
 * @property Student $student
 */
class Feereceipt extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Feereceipt the static model class
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
		return 'feereceipt';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('schoolID, invoicedate, termtitle, periodfrom, periodto, duedate', 'required'),
			array('schoolID, studentID, classID', 'numerical', 'integerOnly'=>true),
			array('termtitle', 'length', 'max'=>50),
			array('previousinvoiceamount, previousamount, adjustedamount, totalamount', 'length', 'max'=>18),
			array('dateadded', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('feereceiptID, schoolID, studentID, classID, invoicedate, termtitle, periodfrom, periodto, previousinvoiceamount, previousamount, duedate, adjustedamount, totalamount, dateadded', 'safe', 'on'=>'search'),
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
			'feepayments' => array(self::HAS_MANY, 'Feepayment', 'feereceiptID'),
			'class' => array(self::BELONGS_TO, 'Classroom', 'classID'),
			'school' => array(self::BELONGS_TO, 'Schoolinfo', 'schoolID'),
			'student' => array(self::BELONGS_TO, 'Student', 'studentID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'feereceiptID' => 'Feereceipt',
			'schoolID' => 'School',
			'studentID' => 'Student',
			'classID' => 'Class',
			'invoicedate' => 'Invoicedate',
			'termtitle' => 'Termtitle',
			'periodfrom' => 'Periodfrom',
			'periodto' => 'Periodto',
			'previousinvoiceamount' => 'Previousinvoiceamount',
			'previousamount' => 'Previousamount',
			'duedate' => 'Duedate',
			'adjustedamount' => 'Adjustedamount',
			'totalamount' => 'Totalamount',
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

		$criteria->compare('feereceiptID',$this->feereceiptID);
		$criteria->compare('schoolID',$this->schoolID);
		$criteria->compare('studentID',$this->studentID);
		$criteria->compare('classID',$this->classID);
		$criteria->compare('invoicedate',$this->invoicedate,true);
		$criteria->compare('termtitle',$this->termtitle,true);
		$criteria->compare('periodfrom',$this->periodfrom,true);
		$criteria->compare('periodto',$this->periodto,true);
		$criteria->compare('previousinvoiceamount',$this->previousinvoiceamount,true);
		$criteria->compare('previousamount',$this->previousamount,true);
		$criteria->compare('duedate',$this->duedate,true);
		$criteria->compare('adjustedamount',$this->adjustedamount,true);
		$criteria->compare('totalamount',$this->totalamount,true);
		$criteria->compare('dateadded',$this->dateadded,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}