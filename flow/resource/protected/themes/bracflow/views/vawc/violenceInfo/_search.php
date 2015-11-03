<?php
/* @var $this ViolenceInfoController */
/* @var $model ViolenceInfo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reporter_name'); ?>
		<?php echo $form->textField($model,'reporter_name',array('size'=>60,'maxlength'=>127)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reporter_designation'); ?>
		<?php echo $form->textField($model,'reporter_designation',array('size'=>60,'maxlength'=>127)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reporter_pin'); ?>
		<?php echo $form->textField($model,'reporter_pin',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reporter_program'); ?>
		<?php echo $form->textField($model,'reporter_program',array('size'=>60,'maxlength'=>127)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reporter_branch'); ?>
		<?php echo $form->textField($model,'reporter_branch',array('size'=>60,'maxlength'=>127)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reporter_upazilla'); ?>
		<?php echo $form->textField($model,'reporter_upazilla',array('size'=>60,'maxlength'=>127)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reporter_district'); ?>
		<?php echo $form->textField($model,'reporter_district',array('size'=>60,'maxlength'=>127)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'violence_headline'); ?>
		<?php echo $form->textField($model,'violence_headline',array('size'=>60,'maxlength'=>127)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reporting_time'); ?>
		<?php echo $form->textField($model,'reporting_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'victim_info_given'); ?>
		<?php echo $form->textField($model,'victim_info_given',array('size'=>60,'maxlength'=>140)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'victim_name'); ?>
		<?php echo $form->textField($model,'victim_name',array('size'=>60,'maxlength'=>140)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'victim_gender'); ?>
		<?php echo $form->textField($model,'victim_gender',array('size'=>60,'maxlength'=>140)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'victim_age'); ?>
		<?php echo $form->textField($model,'victim_age',array('size'=>60,'maxlength'=>140)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'victim_occupation'); ?>
		<?php echo $form->textField($model,'victim_occupation',array('size'=>60,'maxlength'=>127)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'victim_father'); ?>
		<?php echo $form->textField($model,'victim_father',array('size'=>60,'maxlength'=>127)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'victim_mother'); ?>
		<?php echo $form->textField($model,'victim_mother',array('size'=>60,'maxlength'=>127)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'victim_husband'); ?>
		<?php echo $form->textField($model,'victim_husband',array('size'=>60,'maxlength'=>127)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'victim_autism'); ?>
		<?php echo $form->textField($model,'victim_autism',array('size'=>60,'maxlength'=>140)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'victim_address'); ?>
		<?php echo $form->textField($model,'victim_address',array('size'=>60,'maxlength'=>140)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'victim_village'); ?>
		<?php echo $form->textField($model,'victim_village',array('size'=>60,'maxlength'=>140)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'victim_postoffice'); ?>
		<?php echo $form->textField($model,'victim_postoffice',array('size'=>60,'maxlength'=>140)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'victim_upazilla'); ?>
		<?php echo $form->textField($model,'victim_upazilla',array('size'=>60,'maxlength'=>140)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'victim_district'); ?>
		<?php echo $form->textField($model,'victim_district',array('size'=>60,'maxlength'=>140)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'victim_marrital_status'); ?>
		<?php echo $form->textField($model,'victim_marrital_status',array('size'=>60,'maxlength'=>140)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'victim_economic_status'); ?>
		<?php echo $form->textField($model,'victim_economic_status',array('size'=>60,'maxlength'=>140)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'victim_religion'); ?>
		<?php echo $form->textField($model,'victim_religion',array('size'=>60,'maxlength'=>140)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'victim_association'); ?>
		<?php echo $form->textField($model,'victim_association',array('size'=>60,'maxlength'=>140)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'victim_supporter'); ?>
		<?php echo $form->textField($model,'victim_supporter',array('size'=>60,'maxlength'=>140)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'brac_contribution'); ?>
		<?php echo $form->textField($model,'brac_contribution',array('size'=>60,'maxlength'=>140)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'victim_firstaid_status'); ?>
		<?php echo $form->textField($model,'victim_firstaid_status',array('size'=>60,'maxlength'=>140)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'victim_report_condition'); ?>
		<?php echo $form->textField($model,'victim_report_condition',array('size'=>60,'maxlength'=>140)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'legal_step'); ?>
		<?php echo $form->textField($model,'legal_step',array('size'=>60,'maxlength'=>140)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'victim_abuser_relation'); ?>
		<?php echo $form->textField($model,'victim_abuser_relation',array('size'=>60,'maxlength'=>140)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'violence_description'); ?>
		<?php echo $form->textField($model,'violence_description',array('size'=>60,'maxlength'=>140)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'violence_location'); ?>
		<?php echo $form->textField($model,'violence_location',array('size'=>60,'maxlength'=>140)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'case_id'); ?>
		<?php echo $form->textField($model,'case_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->