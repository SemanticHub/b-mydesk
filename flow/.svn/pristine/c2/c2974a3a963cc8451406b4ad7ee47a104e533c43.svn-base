<?php

/**
 * This is the model class for table "vawc_abuser".
 *
 * The followings are the available columns in table 'vawc_abuser':
 * @property integer $id
 * @property string $gender
 * @property string $name
 * @property string $age
 * @property string $marrital_status
 * @property string $occupation
 * @property string $religion
 * @property string $economic_status
 * @property string $social_status
 * @property string $location
 * @property string $current_location
 * @property string $address
 * @property string $district
 * @property string $village
 * @property string $upazilla
 * @property string $police_station
 *
 * The followings are the available model relations:
 * @property AbuserViolence[] $abuserViolences
 */
class Abuser extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vawc_abuser';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('gender, name, age, marrital_status, occupation, religion, economic_status, social_status, location, current_location, address, district, village, upazilla, police_station', 'length', 'max'=>127),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, gender, name, age, marrital_status, occupation, religion, economic_status, social_status, location, current_location, address, district, village, upazilla, police_station', 'safe', 'on'=>'search'),
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
			'abuserViolences' => array(self::HAS_MANY, 'AbuserViolence', 'abuser_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'gender' => 'Gender',
			'name' => 'Name',
			'age' => 'Age',
			'marrital_status' => 'Marrital Status',
			'occupation' => 'Occupation',
			'religion' => 'Religion',
			'economic_status' => 'Economic Status',
			'social_status' => 'Social Status',
			'location' => 'Location',
			'current_location' => 'Current Location',
			'address' => 'Address',
			'district' => 'District',
			'village' => 'Village',
			'upazilla' => 'Upazilla',
			'police_station' => 'Police Station',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('age',$this->age,true);
		$criteria->compare('marrital_status',$this->marrital_status,true);
		$criteria->compare('occupation',$this->occupation,true);
		$criteria->compare('religion',$this->religion,true);
		$criteria->compare('economic_status',$this->economic_status,true);
		$criteria->compare('social_status',$this->social_status,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('current_location',$this->current_location,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('district',$this->district,true);
		$criteria->compare('village',$this->village,true);
		$criteria->compare('upazilla',$this->upazilla,true);
		$criteria->compare('police_station',$this->police_station,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Abuser the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
