<?php

/**
 * This is the model class for table "vawc_violence_info".
 *
 * The followings are the available columns in table 'vawc_violence_info':
 * @property integer $id
 * @property string $reporter_name
 * @property string $reporter_designation
 * @property string $reporter_pin
 * @property string $reporter_program
 * @property string $reporter_branch
 * @property string $reporter_upazilla
 * @property string $reporter_district
 * @property string $violence_headline
 * @property string $reporting_time
 * @property string $victim_info_given
 * @property string $victim_name
 * @property string $victim_gender
 * @property string $victim_age
 * @property string $victim_occupation
 * @property string $victim_father
 * @property string $victim_mother
 * @property string $victim_husband
 * @property string $victim_autism
 * @property string $victim_address
 * @property string $victim_village
 * @property string $victim_postoffice
 * @property string $victim_upazilla
 * @property string $victim_district
 * @property string $victim_marrital_status
 * @property string $victim_economic_status
 * @property string $victim_religion
 * @property string $victim_association
 * @property string $victim_supporter
 * @property string $brac_contribution
 * @property string $victim_firstaid_status
 * @property string $victim_report_condition
 * @property string $legal_step
 * @property string $victim_abuser_relation
 * @property string $violence_description
 * @property string $violence_location
 * @property integer $case_id
 *
 * The followings are the available model relations:
 * @property AbuserViolence[] $abuserViolences
 */
class ViolenceInfo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vawc_violence_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('case_id', 'required'),
			array('case_id', 'numerical', 'integerOnly'=>true),
			array('reporter_name, reporter_designation, reporter_program, reporter_branch, reporter_upazilla, reporter_district, violence_headline, victim_occupation, victim_father, victim_mother, victim_husband', 'length', 'max'=>127),
			array('reporter_pin', 'length', 'max'=>16),
			array('victim_info_given, victim_name, victim_gender, victim_age, victim_autism, victim_address, victim_village, victim_postoffice, victim_upazilla, victim_district, victim_marrital_status, victim_economic_status, victim_religion, victim_association, victim_supporter, brac_contribution, victim_firstaid_status, victim_report_condition, legal_step, victim_abuser_relation, violence_description, violence_location', 'length', 'max'=>140),
			array('reporting_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, reporter_name, reporter_designation, reporter_pin, reporter_program, reporter_branch, reporter_upazilla, reporter_district, violence_headline, reporting_time, victim_info_given, victim_name, victim_gender, victim_age, victim_occupation, victim_father, victim_mother, victim_husband, victim_autism, victim_address, victim_village, victim_postoffice, victim_upazilla, victim_district, victim_marrital_status, victim_economic_status, victim_religion, victim_association, victim_supporter, brac_contribution, victim_firstaid_status, victim_report_condition, legal_step, victim_abuser_relation, violence_description, violence_location, case_id', 'safe', 'on'=>'search'),
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
			'abuserViolences' => array(self::HAS_MANY, 'AbuserViolence', 'violence_info_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'reporter_name' => 'Reporter Name',
			'reporter_designation' => 'Reporter Designation',
			'reporter_pin' => 'Reporter Pin',
			'reporter_program' => 'Reporter Program',
			'reporter_branch' => 'Reporter Branch',
			'reporter_upazilla' => 'Reporter Upazilla',
			'reporter_district' => 'Reporter District',
			'violence_headline' => 'Violence Headline',
			'reporting_time' => 'Reporting Time',
			'victim_info_given' => 'Victim Info Given',
			'victim_name' => 'Victim Name',
			'victim_gender' => 'Victim Gender',
			'victim_age' => 'Victim Age',
			'victim_occupation' => 'Victim Occupation',
			'victim_father' => 'Victim Father',
			'victim_mother' => 'Victim Mother',
			'victim_husband' => 'Victim Husband',
			'victim_autism' => 'Victim Autism',
			'victim_address' => 'Victim Address',
			'victim_village' => 'Victim Village',
			'victim_postoffice' => 'Victim Postoffice',
			'victim_upazilla' => 'Victim Upazilla',
			'victim_district' => 'Victim District',
			'victim_marrital_status' => 'Victim Marrital Status',
			'victim_economic_status' => 'Victim Economic Status',
			'victim_religion' => 'Victim Religion',
			'victim_association' => 'Victim Association',
			'victim_supporter' => 'Victim Supporter',
			'brac_contribution' => 'Brac Contribution',
			'victim_firstaid_status' => 'Victim Firstaid Status',
			'victim_report_condition' => 'Victim Report Condition',
			'legal_step' => 'Legal Step',
			'victim_abuser_relation' => 'Victim Abuser Relation',
			'violence_description' => 'Violence Description',
			'violence_location' => 'Violence Location',
			'case_id' => 'Case',
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
		$criteria->compare('reporter_name',$this->reporter_name,true);
		$criteria->compare('reporter_designation',$this->reporter_designation,true);
		$criteria->compare('reporter_pin',$this->reporter_pin,true);
		$criteria->compare('reporter_program',$this->reporter_program,true);
		$criteria->compare('reporter_branch',$this->reporter_branch,true);
		$criteria->compare('reporter_upazilla',$this->reporter_upazilla,true);
		$criteria->compare('reporter_district',$this->reporter_district,true);
		$criteria->compare('violence_headline',$this->violence_headline,true);
		$criteria->compare('reporting_time',$this->reporting_time,true);
		$criteria->compare('victim_info_given',$this->victim_info_given,true);
		$criteria->compare('victim_name',$this->victim_name,true);
		$criteria->compare('victim_gender',$this->victim_gender,true);
		$criteria->compare('victim_age',$this->victim_age,true);
		$criteria->compare('victim_occupation',$this->victim_occupation,true);
		$criteria->compare('victim_father',$this->victim_father,true);
		$criteria->compare('victim_mother',$this->victim_mother,true);
		$criteria->compare('victim_husband',$this->victim_husband,true);
		$criteria->compare('victim_autism',$this->victim_autism,true);
		$criteria->compare('victim_address',$this->victim_address,true);
		$criteria->compare('victim_village',$this->victim_village,true);
		$criteria->compare('victim_postoffice',$this->victim_postoffice,true);
		$criteria->compare('victim_upazilla',$this->victim_upazilla,true);
		$criteria->compare('victim_district',$this->victim_district,true);
		$criteria->compare('victim_marrital_status',$this->victim_marrital_status,true);
		$criteria->compare('victim_economic_status',$this->victim_economic_status,true);
		$criteria->compare('victim_religion',$this->victim_religion,true);
		$criteria->compare('victim_association',$this->victim_association,true);
		$criteria->compare('victim_supporter',$this->victim_supporter,true);
		$criteria->compare('brac_contribution',$this->brac_contribution,true);
		$criteria->compare('victim_firstaid_status',$this->victim_firstaid_status,true);
		$criteria->compare('victim_report_condition',$this->victim_report_condition,true);
		$criteria->compare('legal_step',$this->legal_step,true);
		$criteria->compare('victim_abuser_relation',$this->victim_abuser_relation,true);
		$criteria->compare('violence_description',$this->violence_description,true);
		$criteria->compare('violence_location',$this->violence_location,true);
		$criteria->compare('case_id',$this->case_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ViolenceInfo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
