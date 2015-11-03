<style type="text/css">
    .ui.selection, .ui.selection .menu {
        padding: .4em .5em; border: 1px solid #aaa; box-shadow: 0 0 0 3px rgba(0, 0, 0, 0.05) !important;
        background: #fff;
    }
    .required {
        color: #ff0000; font-weight: bold; font-size: 2em; line-height: 13px; vertical-align: text-bottom;
    }    
</style>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'groups-form',
    'enableAjaxValidation' => false,
    'htmlOptions' => array('class' => 'ui form')
        ));
?>

<div class="ui fluid form segment" style="background: rgba(0, 0, 0 , 0.1); margin-top: 0">
    <?php echo $form->errorSummary($model, '', '', array('class' => 'ui error message', 'style' => 'display:block; border: 1px solid; margin-top:0')); ?>
    <div class="ui grid sms-form">
        <div class="eight wide column" style="margin-bottom: 0">
            <div class="field">
                <?php echo $form->labelEx($model, 'name'); ?>
                <div class="ui mini input">
                    <?php echo $form->textField($model, 'name', array('size' => 127, 'maxlength' => 11)); ?>
                    <?php echo $form->error($model, 'name'); ?>
                </div>
            </div>

            <div class="field">
                <?php echo $form->labelEx($model, 'details'); ?>
                <div class="ui mini input">
                    <?php echo $form->textArea($model, 'details', array('size' => 60, 'maxlength' => 256)); ?>
                    <?php echo $form->error($model, 'details'); ?>
                </div>
            </div>

            <div class="field" style="margin-bottom: 0">
                <div class="row buttons">
                    <div class="ui small submit teal labeled icon button">
                        <i class="right arrow icon"></i>
                        Save
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>
<?php $this->endWidget(); ?>
