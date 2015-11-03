<style type="text/css">
    .ui.selection.dropdown, .ui.selection.dropdown .menu {
        padding: .4em .5em; border: 0px solid #aaa; box-shadow: 0 0 0 3px rgba(0, 0, 0, 0.05) !important;
    }
    .required {
        color: #ff0000; font-weight: bold; font-size: 2em; line-height: 13px; vertical-align: text-bottom;
    }    
</style>
<div class="ui fluid form segment" style="background: rgba(0, 0, 0 , 0.1); margin-top: 0; margin-bottom: 0; border:0px; padding-bottom: 0; padding-top: 0">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'sms-group-members-form',
        'htmlOptions' => array('class' => 'ui form'),
        'enableAjaxValidation' => false,
    ));
    ?>
    <?php echo $form->errorSummary($model, '', '', array('class' => 'ui error message', 'style' => 'display:block; border: px solid; margin-top:0')); ?>
    <div class="ui grid sms-form">        
        <div class="wide column">
            <?php echo $form->hiddenField($model, 'group_id', array('value' => $_REQUEST['group_id'])); ?>
            <div class="field">
                <?php echo $form->labelEx($model, 'member_pin'); ?>
                <div class="ui mini input">
                    <?php echo $form->textField($model, 'member_pin', array('size' => 45, 'maxlength' => 45)); ?>
                </div>
                <?php //echo $form->error($model, 'member_pin');  ?>
            </div>

            <div class="field">
                <?php echo $form->labelEx($model, 'member_phone'); ?>
                <div class="ui mini input">
                    <?php echo $form->textField($model, 'member_phone', array('size' => 45, 'maxlength' => 45)); ?>
                </div>
                <?php //echo $form->error($model, 'member_phone');  ?>
            </div>

            <div class="field">
                <?php echo $form->labelEx($model, 'member_name'); ?>
                <div class="ui mini input">
                    <?php echo $form->textField($model, 'member_name', array('size' => 45, 'maxlength' => 45)); ?>
                </div>
                <?php //echo $form->error($model, 'member_name');  ?>
            </div>
            <?php if( isset($_GET['id']) && isset($_GET['gid']) ) { ?>
            <div class="field" style="margin-bottom: 0px">
                <div class="row buttons">
                    <div class="ui small submit teal labeled icon button">
                        <i class="right arrow icon"></i>
                        Save
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!--    </div>
            <div class="field buttons">
        <?php //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save');  ?>
            </div>-->



        <?php $this->endWidget(); ?>
    </div>