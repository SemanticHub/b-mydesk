<?php
/* @var $this SmsGroupMemberController */
/* @var $model SmsGroupMembers */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sms-group-members-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'group_id'); ?>
		<?php echo $form->textField($model,'group_id'); ?>
		<?php echo $form->error($model,'group_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'member_id'); ?>
		<?php echo $form->textField($model,'member_id'); ?>
		<?php echo $form->error($model,'member_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'member_pin'); ?>
		<?php echo $form->textField($model,'member_pin',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'member_pin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'member_phone'); ?>
		<?php echo $form->textField($model,'member_phone',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'member_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'member_name'); ?>
		<?php echo $form->textField($model,'member_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'member_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_by'); ?>
		<?php echo $form->textField($model,'create_by'); ?>
		<?php echo $form->error($model,'create_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->