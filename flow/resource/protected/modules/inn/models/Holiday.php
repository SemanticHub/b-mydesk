<?php

/**
 * This is the model class for table "inn_holidays".
 *
 * The followings are the available columns in table 'inn_holidays':
 * @property integer $id
 * @property string $year
 * @property string $holiday
 * @property string $description
 */
class Holiday extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'inn_holidays';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('holiday', 'required'),
            array('year', 'length', 'max' => 45),
            array('description', 'length', 'max' => 255),
            array('id, year, holiday, description', 'safe', 'on' => 'search'),
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
            'year' => 'Year',
            'holiday' => 'Holiday',
            'description' => 'Description',
        );
    }

    public function search() {
        $zone = new DateTimeZone("Asia/Dhaka");
        $serverDateTime = new DateTime("now", $zone);

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('year', $serverDateTime->format('Y'), true);
        $criteria->compare('holiday', $this->holiday, true);
        $criteria->compare('description', $this->description, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => false
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Holiday the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
