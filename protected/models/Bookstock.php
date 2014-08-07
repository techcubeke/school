<?php

/**
 * This is the model class for table "bookstock".
 *
 * The followings are the available columns in table 'bookstock':
 * @property integer $bookstockID
 * @property integer $schoolID
 * @property integer $vendorID
 * @property integer $bookID
 * @property string $barcodevalue
 * @property string $bookposition
 * @property string $purchasedate
 * @property string $purchasedby
 * @property integer $instock
 * @property integer $isreference
 * @property string $reason
 * @property string $dateadded
 * @property string $datemodified
 *
 * The followings are the available model relations:
 * @property Bookissuereturn[] $bookissuereturns
 * @property Schoolinfo $school
 * @property Vendor $vendor
 * @property Book $book
 */
class Bookstock extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Bookstock the static model class
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
		return 'bookstock';
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
			array('schoolID, vendorID, bookID, instock, isreference', 'numerical', 'integerOnly'=>true),
			array('barcodevalue, bookposition, purchasedby', 'length', 'max'=>50),
			array('purchasedate, reason, dateadded, datemodified', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('bookstockID, schoolID, vendorID, bookID, barcodevalue, bookposition, purchasedate, purchasedby, instock, isreference, reason, dateadded, datemodified', 'safe', 'on'=>'search'),
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
			'bookissuereturns' => array(self::HAS_MANY, 'Bookissuereturn', 'bookstockID'),
			'school' => array(self::BELONGS_TO, 'Schoolinfo', 'schoolID'),
			'vendor' => array(self::BELONGS_TO, 'Vendor', 'vendorID'),
			'book' => array(self::BELONGS_TO, 'Book', 'bookID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'bookstockID' => 'Bookstock',
			'schoolID' => 'School',
			'vendorID' => 'Vendor',
			'bookID' => 'Book',
			'barcodevalue' => 'Barcodevalue',
			'bookposition' => 'Bookposition',
			'purchasedate' => 'Purchasedate',
			'purchasedby' => 'Purchasedby',
			'instock' => 'Instock',
			'isreference' => 'Isreference',
			'reason' => 'Reason',
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

		$criteria->compare('bookstockID',$this->bookstockID);
		$criteria->compare('schoolID',$this->schoolID);
		$criteria->compare('vendorID',$this->vendorID);
		$criteria->compare('bookID',$this->bookID);
		$criteria->compare('barcodevalue',$this->barcodevalue,true);
		$criteria->compare('bookposition',$this->bookposition,true);
		$criteria->compare('purchasedate',$this->purchasedate,true);
		$criteria->compare('purchasedby',$this->purchasedby,true);
		$criteria->compare('instock',$this->instock);
		$criteria->compare('isreference',$this->isreference);
		$criteria->compare('reason',$this->reason,true);
		$criteria->compare('dateadded',$this->dateadded,true);
		$criteria->compare('datemodified',$this->datemodified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}