<?php

/**
 * This is the model class for table "inn_supervisors".
 *
 * The followings are the available columns in table 'inn_supervisors':
 * @property integer $id
 * @property string $pin
 * @property string $name
 * @property string $designation
 * @property string $department
 * @property string $status
 * @property string $special
 * @property integer $create_by
 * @property string $create_time
 * @property string $report
 */
class Supervisor extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'inn_supervisors';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('pin, create_by, create_time', 'required'),
            array('create_by', 'numerical', 'integerOnly' => true),
            array('pin, name, designation, department', 'length', 'max' => 45),
            array('status, special, report', 'length', 'max' => 1),
            array('id, pin, name, designation, department, status, special, create_by, create_time, report', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'pin' => 'Pin',
            'name' => 'Name',
            'designation' => 'Designation',
            'department' => 'Department',
            'status' => 'Status',
            'special' => 'Special',
            'create_by' => 'Create By',
            'create_time' => 'Create Time',
            'report' => 'Report',
        );
    }

    public function search() {

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('pin', $this->pin, true);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('designation', $this->designation, true);
        $criteria->compare('department', $this->department, true);
        $criteria->compare('status', $this->status, true);
        $criteria->compare('special', $this->special, true);
        $criteria->compare('create_by', $this->create_by);
        $criteria->compare('create_time', $this->create_time, true);
        $criteria->compare('report', $this->report, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function isSupervisor() {
        $supervisorId = Supervisor::model()->find(array('condition' => 'pin=:pin', 'params' => array(':pin' => Yii::app()->user->name)));
        if ($supervisorId)
            return true;
        else
            return false;
    }
    
    public function isSuperSupervisor() {
        $supervisorId = Supervisor::model()->find(array('condition' => 'pin=:pin and special=1', 'params' => array(':pin' => Yii::app()->user->name)));
        if ($supervisorId)
            return true;
        else
            return false;
    }

}
