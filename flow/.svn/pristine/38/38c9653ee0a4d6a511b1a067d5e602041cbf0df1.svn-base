<style type="text/css">
    .ui.selection, .ui.selection .menu {
        padding: .4em .5em; border: 1px solid #aaa; box-shadow: 0 0 0 3px rgba(0, 0, 0, 0.05) !important;
        background: #fff;
    }
    .required {
        color: #ff0000; font-weight: bold; font-size: 2em; line-height: 13px; vertical-align: text-bottom;
    }    
</style>

<div class="ui fluid form segment" style="background: rgba(0, 0, 0 , 0.1); margin-top: 0; margin-bottom: 0; border:0px; padding-bottom: 0; padding-top: 0">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'sms-group-share-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array('class' => 'ui form')
    ));
    ?>
    <?php echo $form->errorSummary($model, '', '', array('class' => 'ui error message', 'style' => 'display:block; border: 1px solid; margin-top:0')); ?>

    <div class="ui grid sms-form">        
        <div class="eight wide column">

            <div class="field">
                <?php echo $form->labelEx($model, 'user_id'); ?>
                <div class="ui mini input"> 
                    <?php
            echo $form->textField($model, 'user_id', array('size' => 45, 'maxlength' => 45)); 
            echo CHtml::textField('user_name', '',  array('disabled'=>'disabled','size' => 45, 'maxlength' => 45)); 
            ?>

                <?php echo $form->error($model, 'user_id'); ?>
            </div>
                
            
                
            
            <?php echo $form->hiddenField($model, 'shareby_user_id'); ?>
            <?php echo $form->hiddenField($model, 'group_id'); ?>

        </div>
    </div>
</div>
<?php $this->endWidget(); ?>