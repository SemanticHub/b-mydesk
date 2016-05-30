<?php

/**
 * This is the model class for table "inn_sync".
 *
 * The followings are the available columns in table 'inn_sync':
 * @property integer $trans_id
 * @property string $trans_time
 * @property string $pin
 * @property string $wallet
 * @property integer $type
 * @property string $date_time
 * @property string $amount
 */
class Sync extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'inn_sync';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            //array('id', 'required'),
            //array('id', 'numerical', 'integerOnly' => true),
            //array('from_pin, to_pin', 'length', 'max' => 45),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('trans_id, trans_time, pin, wallet, type, date_time, amount', 'safe', 'on' => 'search'),
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
            'trans_id' => 'Trans Id',
            'trans_time' => 'Trans Time',
            'pin' => 'PIN',
            'type' => 'Type',
            'wallet' => 'Wallet',
            'date_time' => 'Date Time',
            'amount' => 'Amount',
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

        $criteria->compare('trans_id', $this->trans_id);
        $criteria->compare('trans_time', $this->trans_time);
        $criteria->compare('pin', $this->pin);
        $criteria->compare('wallet', $this->wallet);
        $criteria->compare('type', $this->type);
        $criteria->compare('date_time', $this->date_time);
        $criteria->compare('amount', $this->amount);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Queue the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
