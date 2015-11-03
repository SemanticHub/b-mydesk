<?php

/**
 * This is the model class for table "vawc_group_members".
 *
 * The followings are the available columns in table 'vawc_group_members':
 * @property integer $id
 * @property integer $member_id
 * @property integer $group_id
 */
class GroupMembers extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'vawc_group_members';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('member_id, group_id', 'numerical', 'integerOnly' => true),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, member_id, group_id', 'safe', 'on' => 'search'),
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
            'member_id' => 'Member',
            'group_id' => 'Group',
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
        $criteria->compare('member_id', $this->member_id);
        $criteria->compare('group_id', $this->group_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return GroupMembers the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function isCCC() {
        $member = Members::model()->findAll(array('condition' => 'pin=:pin', 'params' => array(':pin' => Yii::app()->user->username)));
        //CVarDumper::dump($member, 10, true);
        if ($member) {
            foreach ($member as $key => $data) {
                $groupMember = GroupMembers::model()->find(array('condition' => 'member_id=:mid and group_id=:gid', 'params' => array(':mid' => $data->id, ':gid' => '31')));
                //CVarDumper::dump($groupMember, 10, true);
                if ($groupMember)
                    return true;
                else
                    continue;
            }
            return false;
        }
    }

    public function isFCC() {
        $member = Members::model()->findAll(array('condition' => 'pin=:pin', 'params' => array(':pin' => Yii::app()->user->username)));
        if ($member) {
            foreach ($member as $key => $data) {
                $groupMember = GroupMembers::model()->find(array('condition' => 'member_id=:mid and group_id!=:gid', 'params' => array(':mid' => $data->id, ':gid' => '31')));
                if ($groupMember)
                    return true;
                else
                    continue;
            }
            return false;
        }
    }

}
