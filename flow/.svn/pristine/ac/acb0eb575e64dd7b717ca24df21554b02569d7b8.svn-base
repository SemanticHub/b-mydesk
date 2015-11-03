<?php

/**
 * This is the model class for table "sms_out".
 *
 * The followings are the available columns in table 'sms_out':
 * @property integer $id
 * @property integer $group_id
 * @property string $message
 * @property string $message_type
 * @property string $department
 * @property string $mask
 * @property string $to_number
 * @property integer $create_by
 * @property string $create_time
 * @property string $priority
 * @property string $status
 * @property string $responce_code
 * @property string $sent_time
 */
class SmsOut extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'sms_out';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('message, message_type, department, mask, to_number,  create_time, status,', 'required'),
            array('group_id, create_by', 'numerical', 'integerOnly' => true),
            array('message_type, department, mask, to_number, priority, responce_code', 'length', 'max' => 45),
            array('message', 'length', 'max' => 160),
            array('sent_time, responce_code,app_id,create_by,group_id,fail_count,read_sms,status', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, group_id,app_id, message, message_type, department, mask, to_number, create_by, create_time, priority, status, read_sms, responce_code, sent_time,fail_count', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'group_id' => 'Group',
            'app_id' => 'App',
            'message' => 'Message',
            'message_type' => 'Message Type',
            'department' => 'Department',
            'mask' => 'Mask',
            'to_number' => 'To Number',
            'create_by' => 'Create By',
            'create_time' => 'Time',
            'priority' => 'Priority',
            'status' => 'Status',
            'responce_code' => 'Responce Code',
            'sent_time' => 'Sent Time',
            'read_sms' => 'Read',
            'fail_count' => 'Fail',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('group_id', $this->group_id, true);         
        //$criteria->compare('group_id', $this->app_id, true); 
        
        $criteria->compare('message', $this->message, true);
        $criteria->compare('message_type', $this->message_type, true);
        $criteria->compare('department', $this->department, true);
        $criteria->compare('mask', $this->mask, true);
        $criteria->compare('to_number', $this->to_number, true);
        $criteria->compare('create_by', $this->create_by);
        $criteria->compare('create_time', $this->create_time, true);
        $criteria->compare('priority', $this->priority, true);
        $criteria->compare('status', $this->status, true);
        $criteria->compare('responce_code', $this->responce_code, true);
        $criteria->compare('sent_time', $this->sent_time, true);
        $criteria->compare('fail_count', $this->fail_count, true);
        $criteria->compare('read_sms', $this->read_sms, true);
        $criteria->order = "id desc";

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => '100'
            )
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return SmsOut the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
