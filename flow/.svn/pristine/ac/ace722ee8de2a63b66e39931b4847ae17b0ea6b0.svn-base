<?php
/* @var $this MembersController */
/* @var $model Members */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'members-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>127)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pin'); ?>
		<?php echo $form->textField($model,'pin'); ?>
		<?php echo $form->error($model,'pin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone'); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->textField($model,'gender',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'designation'); ?>
		<?php echo $form->textField($model,'designation',array('size'=>60,'maxlength'=>127)); ?>
		<?php echo $form->error($model,'designation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'marrital_status'); ?>
		<?php echo $form->textField($model,'marrital_status',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'marrital_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'branch_name'); ?>
		<?php echo $form->textField($model,'branch_name',array('size'=>60,'maxlength'=>127)); ?>
		<?php echo $form->error($model,'branch_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'branch_code'); ?>
		<?php echo $form->textField($model,'branch_code',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'branch_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'program'); ?>
		<?php echo $form->textField($model,'program',array('size'=>60,'maxlength'=>127)); ?>
		<?php echo $form->error($model,'program'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'village'); ?>
		<?php echo $form->textField($model,'village',array('size'=>60,'maxlength'=>127)); ?>
		<?php echo $form->error($model,'village'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_office'); ?>
		<?php echo $form->textField($model,'post_office',array('size'=>60,'maxlength'=>127)); ?>
		<?php echo $form->error($model,'post_office'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'upazilla'); ?>
		<?php echo $form->textField($model,'upazilla',array('size'=>60,'maxlength'=>127)); ?>
		<?php echo $form->error($model,'upazilla'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'district'); ?>
		<?php echo $form->textField($model,'district',array('size'=>60,'maxlength'=>127)); ?>
		<?php echo $form->error($model,'district'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'division'); ?>
		<?php echo $form->textField($model,'division',array('size'=>60,'maxlength'=>127)); ?>
		<?php echo $form->error($model,'division'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->