<?php
/* @var $this SmsOutController */
/* @var $model SmsOut */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sms-out-form',
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
		<?php echo $form->labelEx($model,'message'); ?>
		<?php echo $form->textField($model,'message',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'message'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'message_type'); ?>
		<?php echo $form->textField($model,'message_type',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'message_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'department'); ?>
		<?php echo $form->textField($model,'department',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'department'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mask'); ?>
		<?php echo $form->textField($model,'mask',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'mask'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'to_number'); ?>
		<?php echo $form->textField($model,'to_number',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'to_number'); ?>
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

	<div class="row">
		<?php echo $form->labelEx($model,'priority'); ?>
		<?php echo $form->textField($model,'priority',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'priority'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'responce_code'); ?>
		<?php echo $form->textField($model,'responce_code',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'responce_code'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'read_sms'); ?>
		<?php echo $form->textField($model,'read_sms'); ?>
		<?php echo $form->error($model,'read_sms'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'sent_time'); ?>
		<?php echo $form->textField($model,'sent_time'); ?>
		<?php echo $form->error($model,'sent_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->