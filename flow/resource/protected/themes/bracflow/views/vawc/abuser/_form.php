<?php
/* @var $this AbuserController */
/* @var $model Abuser */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'abuser-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->textField($model,'gender',array('size'=>60,'maxlength'=>127)); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>127)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'age'); ?>
		<?php echo $form->textField($model,'age',array('size'=>60,'maxlength'=>127)); ?>
		<?php echo $form->error($model,'age'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'marrital_status'); ?>
		<?php echo $form->textField($model,'marrital_status',array('size'=>60,'maxlength'=>127)); ?>
		<?php echo $form->error($model,'marrital_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'occupation'); ?>
		<?php echo $form->textField($model,'occupation',array('size'=>60,'maxlength'=>127)); ?>
		<?php echo $form->error($model,'occupation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'religion'); ?>
		<?php echo $form->textField($model,'religion',array('size'=>60,'maxlength'=>127)); ?>
		<?php echo $form->error($model,'religion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'economic_status'); ?>
		<?php echo $form->textField($model,'economic_status',array('size'=>60,'maxlength'=>127)); ?>
		<?php echo $form->error($model,'economic_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'social_status'); ?>
		<?php echo $form->textField($model,'social_status',array('size'=>60,'maxlength'=>127)); ?>
		<?php echo $form->error($model,'social_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location'); ?>
		<?php echo $form->textField($model,'location',array('size'=>60,'maxlength'=>127)); ?>
		<?php echo $form->error($model,'location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'current_location'); ?>
		<?php echo $form->textField($model,'current_location',array('size'=>60,'maxlength'=>127)); ?>
		<?php echo $form->error($model,'current_location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>127)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'district'); ?>
		<?php echo $form->textField($model,'district',array('size'=>60,'maxlength'=>127)); ?>
		<?php echo $form->error($model,'district'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'village'); ?>
		<?php echo $form->textField($model,'village',array('size'=>60,'maxlength'=>127)); ?>
		<?php echo $form->error($model,'village'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'upazilla'); ?>
		<?php echo $form->textField($model,'upazilla',array('size'=>60,'maxlength'=>127)); ?>
		<?php echo $form->error($model,'upazilla'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'police_station'); ?>
		<?php echo $form->textField($model,'police_station',array('size'=>60,'maxlength'=>127)); ?>
		<?php echo $form->error($model,'police_station'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->