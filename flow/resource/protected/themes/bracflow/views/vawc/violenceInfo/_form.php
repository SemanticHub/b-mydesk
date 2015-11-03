<style type="text/css">
    .ui.selection, .ui.selection .menu {
        padding: .4em .5em; border: 1px solid #aaa; box-shadow: 0 0 0 3px rgba(0, 0, 0, 0.05) !important;background: #fff;
    }
    .required {
        color: #ff0000; font-weight: bold; font-size: 2em; line-height: 13px; vertical-align: text-bottom;
    }    
    form.ui.form div.ui.fluid.form.segment div.ui.five.fields div.field label{ font-size: .80em}
    form .ui.grid > .column { margin: 0
    }
    .sms-groups, .sms-groups span {
        display: block; list-style: none; margin: 0; padding: 0
    }      
    .sms-groups li {
        display: inline-block; width: 20%
    }
    .ui.form .field ul.sms-groups li input { margin-top: 3px }
    .ui.form .field ul.sms-groups li label { white-space: nowrap }
</style>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'violence-info-form',
    'enableAjaxValidation' => false,
        ));
?>
<table class="ui table segment view-table" id="yw0">
    <tbody>
        <tr class="odd"><th><?php echo $form->labelEx($model, 'reporter_name'); ?></th><td><?php echo $model->reporter_name ?></td></tr>
        <tr class="even"><th><?php echo $form->labelEx($model, 'reporter_designation'); ?></th><td><?php echo $model->reporter_designation ?></td></tr>
        <tr class="odd"><th><?php echo $form->labelEx($model, 'reporter_pin'); ?></th><td><?php echo $model->reporter_pin ?></td></tr>
        <tr class="even"><th><?php echo $form->labelEx($model, 'reporter_program'); ?></th><td><?php echo $model->reporter_program ?></td></tr>
        <tr class="odd"><th><?php echo $form->labelEx($model, 'reporter_branch'); ?></th><td><?php echo $model->reporter_branch ?></td></tr>
        <tr class="even"><th><?php echo $form->labelEx($model, 'reporter_upazilla'); ?></th><td><?php echo $model->reporter_upazilla ?></td></tr>
        <tr class="odd"><th><?php echo $form->labelEx($model, 'reporter_district'); ?></th><td><?php echo $model->reporter_district ?></td></tr>
    </tbody>
</table>
<div class="ui fluid form segment" style="background: rgba(0, 0, 0 , 0.1); margin-top: 0">
    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
    <div class="ui grid com-form">
        <div class="sixteen wide column">
            <div class="field">
                <?php echo $form->labelEx($model, 'case_id'); ?>
                <div class="ui mini input">
                    <?php echo $form->textField($model, 'case_id'); ?>
                    <?php echo $form->error($model, 'case_id'); ?>
                </div>
            </div>
            <div class="ui divider"></div>
        </div>

<!--        <div class="four wide column">
            <div class="field">
                <?php //echo $form->labelEx($model, 'reporter_name'); ?>
                <div class="ui mini input">
                    <?php //echo $form->textField($model, 'reporter_name', array('size' => 60, 'maxlength' => 127)); ?>
                    <?php //echo $form->error($model, 'reporter_name'); ?>
                </div>
            </div>
        </div>

        <div class="four wide column">
            <div class="field">
                <?php //echo $form->labelEx($model, 'reporter_designation'); ?>
                <div class="ui mini input">
                    <?php //echo $form->textField($model, 'reporter_designation', array('size' => 60, 'maxlength' => 127)); ?>
                    <?php //echo $form->error($model, 'reporter_designation'); ?>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="field">
                <?php //echo $form->labelEx($model, 'reporter_pin'); ?>
                <div class="ui mini input">
                    <?php //echo $form->textField($model, 'reporter_pin', array('size' => 16, 'maxlength' => 16)); ?>
                    <?php //echo $form->error($model, 'reporter_pin'); ?>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="field">
                <?php //echo $form->labelEx($model, 'reporter_program'); ?>
                <div class="ui mini input">
                    <?php //echo $form->textField($model, 'reporter_program', array('size' => 60, 'maxlength' => 127)); ?>
                    <?php //echo $form->error($model, 'reporter_program'); ?>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="field">
                <?php //echo $form->labelEx($model, 'reporter_branch'); ?>
                <div class="ui mini input">
                    <?php //echo $form->textField($model, 'reporter_branch', array('size' => 60, 'maxlength' => 127)); ?>
                    <?php //echo $form->error($model, 'reporter_branch'); ?>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="field">
                <?php //echo $form->labelEx($model, 'reporter_upazilla'); ?>
                <div class="ui mini input">
                    <?php //echo $form->textField($model, 'reporter_upazilla', array('size' => 60, 'maxlength' => 127)); ?>
                    <?php //echo $form->error($model, 'reporter_upazilla'); ?>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="field">
                <?php //echo $form->labelEx($model, 'reporter_district'); ?>
                <div class="ui mini input">
                    <?php //echo $form->textField($model, 'reporter_district', array('size' => 60, 'maxlength' => 127)); ?>
                    <?php //echo $form->error($model, 'reporter_district'); ?>
                </div>
            </div>

        </div>-->


        <div class="sixteen wide column">
            <div class="field">
                <?php echo $form->labelEx($model, 'violence_headline'); ?>
                <div class="ui mini input">
                    <?php echo $form->textField($model, 'violence_headline', array('size' => 60, 'maxlength' => 127)); ?>
                    <?php echo $form->error($model, 'violence_headline'); ?>
                </div>
            </div>
        </div>
        <!--        <div class="field">
        <?php //echo $form->labelEx($model, 'reporting_time'); ?>
                    <div class="ui mini input">
        <?php //echo $form->textField($model, 'reporting_time'); ?>
        <?php //echo $form->error($model, 'reporting_time'); ?>
                    </div>
                </div>-->
        <div class="sixteen wide column">
            <div class="field">
                <?php echo $form->labelEx($model, 'victim_info_given'); ?>
                <div class="ui mini input">
                    <?php echo $form->textField($model, 'victim_info_given', array('size' => 60, 'maxlength' => 140)); ?>
                    <?php echo $form->error($model, 'victim_info_given'); ?>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="field">
                <?php echo $form->labelEx($model, 'victim_name'); ?>
                <div class="ui mini input">
                    <?php echo $form->textField($model, 'victim_name', array('size' => 60, 'maxlength' => 140)); ?>
                    <?php echo $form->error($model, 'victim_name'); ?>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="field">
                <?php echo $form->labelEx($model, 'victim_gender'); ?>
                <div class="ui mini input">
                    <?php echo $form->textField($model, 'victim_gender', array('size' => 60, 'maxlength' => 140)); ?>
                    <?php echo $form->error($model, 'victim_gender'); ?>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="field">
                <?php echo $form->labelEx($model, 'victim_age'); ?>
                <div class="ui mini input">
                    <?php echo $form->textField($model, 'victim_age', array('size' => 60, 'maxlength' => 140)); ?>
                    <?php echo $form->error($model, 'victim_age'); ?>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="field">
                <?php echo $form->labelEx($model, 'victim_occupation'); ?>
                <div class="ui mini input">
                    <?php echo $form->textField($model, 'victim_occupation', array('size' => 60, 'maxlength' => 127)); ?>
                    <?php echo $form->error($model, 'victim_occupation'); ?>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="field">
                <?php echo $form->labelEx($model, 'victim_father'); ?>
                <div class="ui mini input">
                    <?php echo $form->textField($model, 'victim_father', array('size' => 60, 'maxlength' => 127)); ?>
                    <?php echo $form->error($model, 'victim_father'); ?>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="field">
                <?php echo $form->labelEx($model, 'victim_mother'); ?>
                <div class="ui mini input">
                    <?php echo $form->textField($model, 'victim_mother', array('size' => 60, 'maxlength' => 127)); ?>
                    <?php echo $form->error($model, 'victim_mother'); ?>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="field">
                <?php echo $form->labelEx($model, 'victim_husband'); ?>
                <div class="ui mini input">
                    <?php echo $form->textField($model, 'victim_husband', array('size' => 60, 'maxlength' => 127)); ?>
                    <?php echo $form->error($model, 'victim_husband'); ?>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="field">
                <?php echo $form->labelEx($model, 'victim_autism'); ?>
                <div class="ui mini input">
                    <?php echo $form->textField($model, 'victim_autism', array('size' => 60, 'maxlength' => 140)); ?>
                    <?php echo $form->error($model, 'victim_autism'); ?>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="field">
                <?php echo $form->labelEx($model, 'victim_address'); ?>
                <div class="ui mini input">
                    <?php echo $form->textField($model, 'victim_address', array('size' => 60, 'maxlength' => 140)); ?>
                    <?php echo $form->error($model, 'victim_address'); ?>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="field">
                <?php echo $form->labelEx($model, 'victim_village'); ?>
                <div class="ui mini input">
                    <?php echo $form->textField($model, 'victim_village', array('size' => 60, 'maxlength' => 140)); ?>
                    <?php echo $form->error($model, 'victim_village'); ?>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="field">
                <?php echo $form->labelEx($model, 'victim_postoffice'); ?>
                <div class="ui mini input">
                    <?php echo $form->textField($model, 'victim_postoffice', array('size' => 60, 'maxlength' => 140)); ?>
                    <?php echo $form->error($model, 'victim_postoffice'); ?>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="field">
                <?php echo $form->labelEx($model, 'victim_upazilla'); ?>
                <div class="ui mini input">
                    <?php echo $form->textField($model, 'victim_upazilla', array('size' => 60, 'maxlength' => 140)); ?>
                    <?php echo $form->error($model, 'victim_upazilla'); ?>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="field">
                <?php echo $form->labelEx($model, 'victim_district'); ?>
                <div class="ui mini input">
                    <?php echo $form->textField($model, 'victim_district', array('size' => 60, 'maxlength' => 140)); ?>
                    <?php echo $form->error($model, 'victim_district'); ?>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="field">
                <?php echo $form->labelEx($model, 'victim_marrital_status'); ?>
                <div class="ui mini input">
                    <?php echo $form->textField($model, 'victim_marrital_status', array('size' => 60, 'maxlength' => 140)); ?>
                    <?php echo $form->error($model, 'victim_marrital_status'); ?>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="field">
                <?php echo $form->labelEx($model, 'victim_economic_status'); ?>
                <div class="ui mini input">
                    <?php echo $form->textField($model, 'victim_economic_status', array('size' => 60, 'maxlength' => 140)); ?>
                    <?php echo $form->error($model, 'victim_economic_status'); ?>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="field">
                <?php echo $form->labelEx($model, 'victim_religion'); ?>
                <div class="ui mini input">
                    <?php echo $form->textField($model, 'victim_religion', array('size' => 60, 'maxlength' => 140)); ?>
                    <?php echo $form->error($model, 'victim_religion'); ?>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="field">
                <?php echo $form->labelEx($model, 'victim_association'); ?>
                <div class="ui mini input">
                    <?php echo $form->textField($model, 'victim_association', array('size' => 60, 'maxlength' => 140)); ?>
                    <?php echo $form->error($model, 'victim_association'); ?>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="field">
                <?php echo $form->labelEx($model, 'victim_supporter'); ?>
                <div class="ui mini input">
                    <?php echo $form->textField($model, 'victim_supporter', array('size' => 60, 'maxlength' => 140)); ?>
                    <?php echo $form->error($model, 'victim_supporter'); ?>
                </div>
            </div>
        </div>        
        <div class="four wide column">
            <div class="field">
                <?php echo $form->labelEx($model, 'victim_firstaid_status'); ?>
                <div class="ui mini input">
                    <?php echo $form->textField($model, 'victim_firstaid_status', array('size' => 60, 'maxlength' => 140)); ?>
                    <?php echo $form->error($model, 'victim_firstaid_status'); ?>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="field">
                <?php echo $form->labelEx($model, 'victim_report_condition'); ?>
                <div class="ui mini input">
                    <?php echo $form->textField($model, 'victim_report_condition', array('size' => 60, 'maxlength' => 140)); ?>
                    <?php echo $form->error($model, 'victim_report_condition'); ?>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="field">
                <?php echo $form->labelEx($model, 'legal_step'); ?>
                <div class="ui mini input">
                    <?php echo $form->textField($model, 'legal_step', array('size' => 60, 'maxlength' => 140)); ?>
                    <?php echo $form->error($model, 'legal_step'); ?>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="field">
                <?php echo $form->labelEx($model, 'victim_abuser_relation'); ?>
                <div class="ui mini input">
                    <?php echo $form->textField($model, 'victim_abuser_relation', array('size' => 60, 'maxlength' => 140)); ?>
                    <?php echo $form->error($model, 'victim_abuser_relation'); ?>
                </div>
            </div>
        </div>
        <div class="sixteen wide column">
            <div class="field">
                <?php echo $form->labelEx($model, 'violence_description'); ?>
                <div class="ui mini input">
                    <?php echo $form->textArea($model, 'violence_description', array('size' => 60, 'maxlength' => 140)); ?>
                    <?php echo $form->error($model, 'violence_description'); ?>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="field">
                <?php echo $form->labelEx($model, 'brac_contribution'); ?>
                <div class="ui mini input">
                    <?php echo $form->textField($model, 'brac_contribution', array('size' => 60, 'maxlength' => 140)); ?>
                    <?php echo $form->error($model, 'brac_contribution'); ?>
                </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="field">
                <?php echo $form->labelEx($model, 'violence_location'); ?>
                <div class="ui mini input">
                    <?php echo $form->textField($model, 'violence_location', array('size' => 60, 'maxlength' => 140)); ?>
                    <?php echo $form->error($model, 'violence_location'); ?>
                </div>
            </div>    
        </div>
        <!--        <div class="field buttons">
        <?php //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
                </div>-->
        <div class="sixteen wide column" style="margin-bottom: 0">
            <div class="field" style="margin-bottom: 0">
                <div class="field buttons" style="margin-bottom: 0">
                    <div class="ui small submit teal labeled icon button">
                        <i class="right arfield icon"></i>
                        Save
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endWidget(); ?>