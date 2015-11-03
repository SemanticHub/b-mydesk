<?php
/* @var $this AbuserViolenceController */
/* @var $model AbuserViolence */
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
		<?php echo $form->label($model,'violence_info_id'); ?>
		<?php echo $form->textField($model,'violence_info_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'abuser_id'); ?>
		<?php echo $form->textField($model,'abuser_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->