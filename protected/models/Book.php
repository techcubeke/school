<?php

/**
 * This is the model class for table "book".
 *
 * The followings are the available columns in table 'book':
 * @property integer $bookID
 * @property integer $schoolID
 * @property integer $subjectID
 * @property string $title
 * @property string $ISBN
 * @property string $author
 * @property string $price
 * @property string $publisher
 * @property string $edition
 * @property string $issuable
 * @property string $volume
 * @property string $status
 * @property string $dateadded
 * @property string $datemodified
 *
 * The followings are the available model relations:
 * @property Subject $subject
 * @property Schoolinfo $school
 * @property Bookstock[] $bookstocks
 * @property Curriculumplan[] $curriculumplans
 */
class Book extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Book the static model class
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
		return 'book';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('schoolID, subjectID, title', 'required'),
			array('schoolID, subjectID', 'numerical', 'integerOnly'=>true),
			array('title, ISBN, author, publisher', 'length', 'max'=>100),
			array('price', 'length', 'max'=>18),
			array('edition, volume', 'length', 'max'=>50),
			array('issuable', 'length', 'max'=>11),
			array('status, dateadded, datemodified', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('bookID, schoolID, subjectID, title, ISBN, author, price, publisher, edition, issuable, volume, status, dateadded, datemodified', 'safe', 'on'=>'search'),
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
			'subject' => array(self::BELONGS_TO, 'Subject', 'subjectID'),
			'school' => array(self::BELONGS_TO, 'Schoolinfo', 'schoolID'),
			'bookstocks' => array(self::HAS_MANY, 'Bookstock', 'bookID'),
			'curriculumplans' => array(self::HAS_MANY, 'Curriculumplan', 'bookID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'bookID' => 'Book',
			'schoolID' => 'School',
			'subjectID' => 'Subject',
			'title' => 'Title',
			'ISBN' => 'Isbn',
			'author' => 'Author',
			'price' => 'Price',
			'publisher' => 'Publisher',
			'edition' => 'Edition',
			'issuable' => 'Issuable',
			'volume' => 'Volume',
			'status' => 'Status',
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

		$criteria->compare('bookID',$this->bookID);
		$criteria->compare('schoolID',$this->schoolID);
		$criteria->compare('subjectID',$this->subjectID);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('ISBN',$this->ISBN,true);
		$criteria->compare('author',$this->author,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('publisher',$this->publisher,true);
		$criteria->compare('edition',$this->edition,true);
		$criteria->compare('issuable',$this->issuable,true);
		$criteria->compare('volume',$this->volume,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('dateadded',$this->dateadded,true);
		$criteria->compare('datemodified',$this->datemodified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}