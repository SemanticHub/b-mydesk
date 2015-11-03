<?php

/**
 * This is the model class for table "vawc_abuser_violence".
 *
 * The followings are the available columns in table 'vawc_abuser_violence':
 * @property integer $id
 * @property integer $violence_info_id
 * @property integer $abuser_id
 *
 * The followings are the available model relations:
 * @property ViolenceInfo $violenceInfo
 * @property Abuser $abuser
 */
class AbuserViolence extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vawc_abuser_violence';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('violence_info_id, abuser_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, violence_info_id, abuser_id', 'safe', 'on'=>'search'),
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
			'violenceInfo' => array(self::BELONGS_TO, 'ViolenceInfo', 'violence_info_id'),
			'abuser' => array(self::BELONGS_TO, 'Abuser', 'abuser_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'violence_info_id' => 'Violence Info',
			'abuser_id' => 'Abuser',
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
		$criteria->compare('violence_info_id',$this->violence_info_id);
		$criteria->compare('abuser_id',$this->abuser_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AbuserViolence the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
