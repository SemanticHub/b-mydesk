<?php

/**
 * This is the model class for table "sms_group_members".
 *
 * The followings are the available columns in table 'sms_group_members':
 * @property integer $id
 * @property integer $group_id
 * @property integer $member_id
 * @property string $member_pin
 * @property string $member_phone
 * @property string $member_name
 * @property integer $create_by
 * @property string $create_time
 *
 * The followings are the available model relations:
 * @property Group $group
 */
class SmsGroupMembers extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'sms_group_members';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('member_phone', 'required'),
            //array('member_phone', 'unique', 'criteria' => array('condition' => 'group_id=:gid', 'params' => array(':gid'=> $this->group_id))),
            //array('member_phone', 'uniqueInGroup'),
            array('group_id, member_id, create_by', 'numerical', 'integerOnly' => true),
            array('member_pin, member_phone, member_name', 'length', 'max' => 45),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, group_id, member_id, member_pin, member_phone, member_name, create_by, create_time', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'group' => array(self::BELONGS_TO, 'Group', 'group_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'group_id' => 'Group',
            'member_id' => 'Member',
            'member_pin' => 'Member Pin',
            'member_phone' => 'Member Phone',
            'member_name' => 'Member Name',
            'create_by' => 'Create By',
            'create_time' => 'Create Time',
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
        $criteria->compare('group_id', $this->group_id);
        $criteria->compare('member_id', $this->member_id);
        $criteria->compare('member_pin', $this->member_pin, true);
        $criteria->compare('member_phone', $this->member_phone, true);
        $criteria->compare('member_name', $this->member_name, true);
        $criteria->compare('create_by', $this->create_by);
        $criteria->compare('create_time', $this->create_time, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return SmsGroupMembers the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
