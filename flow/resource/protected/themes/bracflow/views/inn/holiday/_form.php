<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/datetimepicker/jquery.datetimepicker.min.css">
<div class="form">
    <div class="ui info message">Fields with <span class="required">*</span> are required.</div>
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'holiday-form',
        'htmlOptions' => array('class' => 'ui form')
    ));
    ?>
    <?php echo $form->errorSummary($model, '', '', array('class' => 'ui error message', 'style' => 'display:block; border: 1px solid; margin-top:0')); ?>
    <div class="field">
        <?php echo $form->labelEx($model, 'holiday'); ?>
        <?php echo $form->textField($model, 'holiday'); ?>
        <?php echo $form->error($model, 'holiday'); ?>
    </div>
    <div class="field">
        <?php echo $form->labelEx($model, 'description'); ?>
        <?php echo $form->textField($model, 'description', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'description'); ?>
    </div>
    <div class="field buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'ui small teal button')); ?>
    </div>
    <?php $this->endWidget(); ?>
</div>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/datetimepicker/jquery.datetimepicker.full.min.js"></script>
<script type="text/javascript">
    $('#Holiday_holiday').datetimepicker({
        timepicker:false,
        format: 'Y-m-d',
    });
</script>