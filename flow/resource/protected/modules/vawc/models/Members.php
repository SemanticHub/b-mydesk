<?php

/**
 * This is the model class for table "vawc_members".
 *
 * The followings are the available columns in table 'vawc_members':
 * @property integer $id
 * @property string $name
 * @property integer $pin
 * @property integer $phone
 * @property string $email
 * @property string $gender
 * @property string $designation
 * @property string $marrital_status
 * @property string $branch_name
 * @property string $branch_code
 * @property string $program
 * @property string $village
 * @property string $post_office
 * @property string $upazilla
 * @property string $district
 * @property string $division
 * @property string $status
 */
class Members extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'vawc_members';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('pin, phone', 'numerical', 'integerOnly' => true),
            array('name,email, designation, branch_name, program, village, post_office, upazilla, district, division', 'length', 'max' => 127),
            array('gender, marrital_status, status', 'length', 'max' => 1),
            array('branch_code', 'length', 'max' => 8),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, name, pin, email, phone, gender, designation, marrital_status, branch_name, branch_code, program, village, post_office, upazilla, district, division, status', 'safe', 'on' => 'search'),
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
            'name' => 'Name',
            'pin' => 'Pin',
            'email' => 'EMAIL',
            'phone' => 'Phone',
            'gender' => 'Gender',
            'designation' => 'Designation',
            'marrital_status' => 'Marrital Status',
            'branch_name' => 'Branch Name',
            'branch_code' => 'Branch Code',
            'program' => 'Program',
            'village' => 'Village',
            'post_office' => 'Post Office',
            'upazilla' => 'Upazilla',
            'district' => 'District',
            'division' => 'Division',
            'status' => 'Status',
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
        $criteria->compare('name', $this->name, true);
        $criteria->compare('pin', $this->pin);
        $criteria->compare('email', $this->email);
        $criteria->compare('phone', $this->phone);
        $criteria->compare('gender', $this->gender, true);
        $criteria->compare('designation', $this->designation, true);
        $criteria->compare('marrital_status', $this->marrital_status, true);
        $criteria->compare('branch_name', $this->branch_name, true);
        $criteria->compare('branch_code', $this->branch_code, true);
        $criteria->compare('program', $this->program, true);
        $criteria->compare('village', $this->village, true);
        $criteria->compare('post_office', $this->post_office, true);
        $criteria->compare('upazilla', $this->upazilla, true);
        $criteria->compare('district', $this->district, true);
        $criteria->compare('division', $this->division, true);
        $criteria->compare('status', $this->status, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Members the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }   

}
