<?php

/**
 * This is the model class for table "sms_app".
 *
 * The followings are the available columns in table 'sms_app':
 * @property integer $id
 * @property string $app_name
 * @property string $department
 * @property string $token
 * @property integer $user_id
 * @property string $app_url
 * @property integer $active
 */
class SmsApp extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sms_app';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('app_name, department, app_url', 'required'),
			array('user_id, active', 'numerical', 'integerOnly'=>true),
			array('app_name, department, token, app_url', 'length', 'max'=>127),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, app_name, department, token, user_id, app_url, active', 'safe', 'on'=>'search'),
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
		);
	}
        public function genAppToken($user_id,$app_name,$app_url) {
            
            return sha1(mt_rand(10000, 99999) . time() . $user_id.$app_name . $app_url);
            
        }

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'app_name' => 'App',
			'department' => 'Department',
			'token' => 'Token',
			'user_id' => 'User',
			'app_url' => 'Url',
			'active' => 'Active',
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
		$criteria->compare('app_name',$this->app_name,true);
		$criteria->compare('department',$this->department,true);
		$criteria->compare('token',$this->token,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('app_url',$this->app_url,true);
		$criteria->compare('active',$this->active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SmsApp the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
