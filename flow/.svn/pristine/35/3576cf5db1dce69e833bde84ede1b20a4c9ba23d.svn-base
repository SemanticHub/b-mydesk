<?php
/* @var $this AbuserViolenceController */
/* @var $model AbuserViolence */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'abuser-violence-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'violence_info_id'); ?>
		<?php echo $form->textField($model,'violence_info_id'); ?>
		<?php echo $form->error($model,'violence_info_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'abuser_id'); ?>
		<?php echo $form->textField($model,'abuser_id'); ?>
		<?php echo $form->error($model,'abuser_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->