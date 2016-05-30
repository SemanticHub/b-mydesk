<?php

/**
 * This is the model class for table "inn_cash".
 *
 * The followings are the available columns in table 'inn_cash':
 * @property integer $id
 * @property string $amount
 * @property integer $create_by
 * @property string $create_time
 * @property string $to_pin
 * @property string $initial
 */
class Cash extends CActiveRecord {
    
    
    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'inn_cash';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('amount, to_pin, create_time', 'required'),
            array('create_by', 'numerical', 'integerOnly' => true),
            array('amount', 'length', 'max' => 6),
            array('to_pin', 'length', 'max' => 45),
            array('initial', 'length', 'max' => 255),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, amount, create_by, create_time, to_pin, initial', 'safe', 'on' => 'search'),
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
            'amount' => 'Amount',
            'create_by' => 'Create By',
            'create_time' => 'Create Time',
            'to_pin' => 'To Pin',
            'initial' => 'Initial'
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
    public function search($date) {
        // @todo Please modify the following code to remove attributes that should not be searched.
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('amount', $this->amount, true);
        $criteria->compare('create_by', $this->create_by);
        $criteria->compare('DATE(create_time)', $date, true);
        $criteria->compare('to_pin', $this->to_pin, true);
        $criteria->compare('initial', $this->initial, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Cash the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
