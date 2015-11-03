<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/custom/javascript/jq-datetime-picker/dist/smoothness/jquery-ui-1.10.4.custom.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/custom/javascript/jq-datetime-picker/dist/jquery-ui-timepicker-addon.min.css">
<div class="ui floating  negative message" style="margin-top: 0;">
    <div class="header">
        For safe journey maximum speed limit of our vehicles in highway is 70km/hour
    </div>
</div>
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'transport-form',
    'enableAjaxValidation' => false,
    'htmlOptions' => array('class' => 'ui form')
        ));
?>
<style type="text/css">
    .ui.selection, .ui.selection .menu {
        padding: .4em .5em; border: 1px solid #aaa; box-shadow: 0 0 0 3px rgba(0, 0, 0, 0.05) !important;
        background: #fff;
    }
    .ui-datepicker {
        font-size: 13px;
    }
    .required {
        color: #ff007b; font-weight: bold; font-size: 2em; line-height: 13px; vertical-align: text-bottom;
    }
    #request_type {
        font-size: .8em; text-transform: uppercase; color: #666;
    }
    #supervisor-program, #supervisor-all {
        font-size: 12px; font-weight: bold; text-decoration: underline;
    }
    #supervisor-all.active, #supervisor-program.active {
        color: #ff007b;
    }
    .hint {
        text-transform: uppercase; font-weight: bold; color: #ff007b; font-size: 10px;
    }
    .ui.message ul.list li {
        margin-bottom: .6em
    }
</style>
<div class="ui fluid form segment" style="background: rgba(0, 0, 0 , 0.1); margin-top: 0">
    <input type="hidden" id="hrd-user-department-name" value="<?php echo $model1[0]['Project'] ?>">
    <?php echo $form->errorSummary($model, '', '', array('class' => 'ui error message', 'style' => 'display:block; border: 1px solid; margin-top:0')); ?>

    <h3 class="ui black header dividing" style="margin-top: 0">Travel Information</h3>

    <div class="inline field">
        <?php echo $form->hiddenField($model, 'pin', array('value' => $model1[0]['PIN'])); ?>
        <input type="hidden" id="userType" value="<?php echo (TransportFlowSupervisor::model()->isSupervisor()) ? 'true' : 'false' ?>" />
    </div>

    <div class="ui three fields">
        <div class="field">
            <?php echo $form->labelEx($model, 'travel_type'); ?>
            <?php echo $form->radioButtonList($model, 'travel_type', $travel_type, array('template' => '{input}{label}', 'separator' => '', 'encode' => false, 'type' => 'text', 'class' => '', 'placeholder' => 'Travel Type')); ?>
        </div>
        <div class="field">
            <?php echo $form->labelEx($model, 'travel_in_out'); ?>
            <?php //echo $form->checkbox($model,'travel_in_out',$outside_dhaka, array( 'type'=>'text','class'=>'ui selection dropdown','placeholder'=>'Outside Dhaka?'));  ?>
            <?php echo $form->radioButtonList($model, 'travel_in_out', $outside_dhaka, array('template' => '{input}{label}', 'separator' => '', 'encode' => false, 'type' => 'text', 'class' => '', 'placeholder' => 'Travel Type')); ?>
        </div>
        <div class="field">
            <?php echo $form->labelEx($model, 'passanger'); ?>
            <div class="ui mini input">
                <?php echo $form->textField($model, 'passanger', array('type' => 'text', 'placeholder' => 'passenger')); ?>
            </div>
        </div>
    </div>
    <div class="ui three fields">
        <div class="field">
            <?php echo $form->labelEx($model, 'vehicle_type'); ?>
            <?php //echo $form->textField($model,'vehicle_type',array('type'=>'text','placeholder'=>'Type of Vehicle')); ?>
            <div class="ui mini input">
                <?php echo $form->dropDownList($model, 'vehicle_type', $vehicle_type, array('type' => 'text', 'class' => 'ui mini selection ', 'placeholder' => 'Select')); ?>
            </div>
        </div>
        <div class="field">
            <?php echo $form->labelEx($model, 'start_date'); ?>
            <div class="ui mini input">
                <?php echo $form->textField($model, 'start_date'); ?>
                <span class="hint">Provide time in 24 hour format</span>
            </div>
        </div>
        <div class="field">
            <?php echo $form->labelEx($model, 'return_date'); ?>
            <div class="ui mini input">
                <?php echo $form->textField($model, 'return_date'); ?>
                <span class="hint">Provide time in 24 hour format</span>
            </div>
        </div>
    </div>
    <div class="ui two fields">
        <div class="field">
            <?php echo $form->labelEx($model, 'start_point'); ?>
            <div class="ui mini input">
                <?php echo $form->textField($model, 'start_point', array('type' => 'text')); ?>
            </div>
        </div>
        <div class="field">
            <?php echo $form->labelEx($model, 'end_point'); ?>
            <div class="ui mini input">
                <?php echo $form->textField($model, 'end_point'); ?>
            </div>
        </div>
    </div>
    <div class="field">
        <?php echo $form->labelEx($model, 'travel_reason'); ?>
        <div class="ui mini input">
            <?php echo $form->textField($model, 'travel_reason'); ?>
        </div>
    </div>
    <div class="ui divider"></div>
    <div class="ui two fields" id="for-personal">
        <div class="field" id="departmentField">
            <?php echo $form->labelEx($model, 'bill_dept'); ?>
            <?php echo $form->dropDownList($model, 'bill_dept', HrdService::getProjectsListData(), array('empty' => 'Select ...', 'class' => 'ui selection mini')); ?>
        </div>

        <div class="field" id="supervisorField">
            <?php //echo $form->labelEx($model,'transport_flow_supervisor_id');?>
            <label for="Transport_transport_flow_supervisor_id">Supervisor <span class="required">*</span> <a id="supervisor-program" class="active" href="#">Program</a> | <a  id="supervisor-all" href="#">All</a> </label>
            <?php
            $sp_name = TransportFlowSupervisor::model()->findAll(array('select' => 'name, id', 'order' => 'name ASC'));
            $sp_name_dept = TransportFlowSupervisor::model()->findAll(array('select' => 'id, name', 'condition' => 'dept=:dept && status=1', 'params' => array(':dept' => $model1[0]['Project']), 'order' => 'id ASC'));
            echo $form->dropDownList($model, 'transport_flow_supervisor_id', CHtml::listData($sp_name_dept, 'id', 'name'), array('empty' => 'Select Supervisor...', 'data-validate' => 'fleetsupervisor', 'class' => 'ui selection  supervisor-program'));
            echo $form->dropDownList($model, 'transport_flow_supervisor_id', CHtml::listData($sp_name, 'id', 'name'), array('disabled' => 'disabled', 'empty' => 'Select Supervisor...', 'data-validate' => 'fleetsupervisorall', 'class' => 'ui selection  supervisor-all', 'style' => 'display:none'));
            ?>
        </div>
        <div class="field disabled" id="supervisorPMS" style="display: none">
            <?php echo $form->labelEx($model, 'transport_flow_supervisor_id'); ?>
            <div class="ui mini input">
                <?php
                $sp_name = TransportFlowSupervisor::model()->findAll(array('select' => 'name, id', 'condition' => 'special=1', 'order' => 'name ASC'));
                echo $form->dropDownList($model, 'transport_flow_supervisor_id', CHtml::listData($sp_name, 'id', 'name'), array('disabled' => 'disabled', 'class' => 'ui selection '));
                ?>
            </div>
        </div>
    </div>


    <div class="row buttons">
        <?php //echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Submit',  array('class'=>'teal labeled icon ui button small'));   ?>
        <div class="ui right small submit teal labeled icon button" id="btnSend">
            <i class="right arrow icon"></i>
            Send
        </div>
    </div>
    <div class="ui error message"></div>
</div>
<?php $this->endWidget(); ?>

<script src="<?php echo Yii::app()->theme->baseUrl; ?>/custom/javascript/jq-datetime-picker/dist/jquery-ui-1.10.4.custom.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/custom/javascript/jq-datetime-picker/dist/jquery-ui-timepicker-addon.min.js"></script>
<script type="text/javascript">
    var myControl = {
        create: function (tp_inst, obj, unit, val, min, max, step) {
            $('<input class="ui-timepicker-input" value="' + val + '" style="width:50%">')
                    .appendTo(obj)
                    .spinner({
                        min: min,
                        max: max,
                        step: step,
                        change: function (e, ui) { // key events
                            // don't call if api was used and not key press
                            if (e.originalEvent !== undefined)
                                tp_inst._onTimeChange();
                            tp_inst._onSelectHandler();
                        },
                        spin: function (e, ui) { // spin events
                            tp_inst.control.value(tp_inst, obj, unit, ui.value);
                            tp_inst._onTimeChange();
                            tp_inst._onSelectHandler();
                        }
                    });
            return obj;
        },
        options: function (tp_inst, obj, unit, opts, val) {
            if (typeof (opts) == 'string' && val !== undefined)
                return obj.find('.ui-timepicker-input').spinner(opts, val);
            return obj.find('.ui-timepicker-input').spinner(opts);
        },
        value: function (tp_inst, obj, unit, val) {
            if (val !== undefined)
                return obj.find('.ui-timepicker-input').spinner('value', val);
            return obj.find('.ui-timepicker-input').spinner('value');
        }
    };

    var travelInFormUpdate = function () {

        var key1 = $("#Transport_travel_type input:checked").val();
        var key2 = $("#Transport_travel_in_out input:checked").val();
        if (key1 == 1 && key2 == 1) {
            $('#departmentField').hide('slow');
            $('#supervisorField').hide('slow');
            $('#supervisorField select').attr('disabled', 'disabled');
            $('#supervisorPMS').show('slow');
            $('#supervisorPMS select').removeAttr('disabled');
            $('#supervisorPMS select').val($('#supervisorPMS select').get(0).options[0].value);
        } else if (key1 == 1 && key2 == 0) {
            $('#departmentField').hide('slow');
            $('#supervisorField').hide('slow');
            $('#supervisorField select').attr('disabled', 'disabled');
            $('#supervisorPMS').hide('slow');
            $('#supervisorPMS select').attr('disabled', 'disabled');
        } else if (key1 == 0 && key2 == 0) {
            $('#departmentField').show('slow');
            $('#supervisorField').hide('slow');
            $('#supervisorField select').attr('disabled', 'disabled');
            $('#supervisorPMS').hide('slow');
            $('#supervisorPMS select').attr('disabled', 'disabled');
        } else if (key1 == 0 && key2 == 1) {
            $('#departmentField').show('slow');
            $('#supervisorField').hide('slow');
            $('#supervisorField select').attr('disabled', 'disabled');
            $('#supervisorPMS').hide('slow');
            $('#supervisorPMS select').attr('disabled', 'disabled');
        }
    }

    var travelOutFormUpdate = function () {

        var key1 = $("#Transport_travel_type input:checked").val();
        var key2 = $("#Transport_travel_in_out input:checked").val();
        if (key1 == 1 && key2 == 1) {
            $('#departmentField').hide('slow');
            $('#supervisorField').hide('slow');
            $('#supervisorField select').attr('disabled', 'disabled');
            $('#supervisorPMS').show('slow');
            $('#supervisorPMS select').removeAttr('disabled');
            $('#supervisorPMS select').val($('#supervisorPMS select').get(0).options[0].value);
        } else if (key1 == 1 && key2 == 0) {
            $('#departmentField').hide('slow');
            $('#supervisorField').hide('slow');
            $('#supervisorField select').attr('disabled', 'disabled');
            $('#supervisorPMS').hide('slow');
            $('#supervisorPMS select').attr('disabled', 'disabled');
        } else {
            $('#departmentField').show('slow');
            $('#supervisorField').show('slow');
            $('#supervisorField select.supervisor-program').removeAttr('disabled');
            $('#supervisorField select.supervisor-program').val($('#supervisorField select.supervisor-program option:selected').val());
            $('#supervisorPMS').hide('slow');
            $('#supervisorPMS select').attr('disabled', 'disabled');
        }
    }

    $(function () {
        if ($('.ui.error.message')) {
            $('.ui.error.message').transition('shake');
            $('.ui.error.message').focus();
        }

        if ($('.ui.floating.negative.message')) {
            $('.ui.floating.negative.message').transition('pulse');
        }

        $('#Transport_start_date, #Transport_return_date').datetimepicker({
            controlType: myControl,
            timeFormat: 'HH:mm',
            dateFormat: 'yy-mm-dd'
        });

        $('#supervisor-program').click(function () {
            $('#supervisor-program, #supervisor-all').removeClass('active');
            $('#supervisor-program').addClass('active');
            $('select.supervisor-all').attr('disabled', 'disabled').hide();
            $('select.supervisor-program').removeAttr('disabled').show();
            return false;
        });
        $('#supervisor-all').click(function () {
            $('#supervisor-program, #supervisor-all').removeClass('active');
            $('#supervisor-all').addClass('active');
            $('select.supervisor-program').attr('disabled', 'disabled').hide();
            $('select.supervisor-all').removeAttr('disabled').show();
            return false;
        });

        if ($('#userType').val() == 'true') {
            $('#supervisorField').hide('slow');
            travelInFormUpdate();
            $("#Transport_travel_type input, #Transport_travel_in_out input").change(travelInFormUpdate);
        } else {
            travelOutFormUpdate();
            $("#Transport_travel_type input, #Transport_travel_in_out input").change(travelOutFormUpdate);
        }
    });




    /*$('#supervisorField select.supervisor-program').change(
     function(){
     $('#supervisorField select.supervisor-program').val($('#supervisorField select.supervisor-program option:selected').val());
     }
     );*/

    // $('#Transport_transport_flow_supervisor_id.supervisor-program').click();
    // $('#Transport_transport_flow_supervisor_id.supervisor-program').val($('#Transport_transport_flow_supervisor_id.supervisor-program').get(0).options[0].value);

</script>
<?php
if (Yii::app()->controller->id == 'transport' && Yii::app()->controller->action->id == 'create') {
    ?>
    <div class="ui message">
        <div class="header" style="color: #F05940;text-transform: uppercase">
            Dos and Don’ts for Safe Journey
        </div>
        <div class="ui divider"></div>
        <div class="ui two column grid">
            <div class="column" style="margin-top: 0">
                <div class="header">
                    Driver will ..
                </div>
                <ul class="list" style="color: #444; margin-top: 15px">
                    <li>Fasten seat belt</li>
                    <li>Ask passengers to fasten seat belts</li>
                    <li>Not take food, smoke, drink while driving</li>
                    <li>Not take drug, sedatives before/or while driving</li>
                    <li>Not gossip with the users</li>
                    <li>Not use cell phone while driving
                    <li>Not play DVD payer</li>
                    <li>Take a 10-15 minutes break every 2 hours in case of long journey</li>
                    <li>Avoid journey in mid-night and just after taking lunch except emergency</li>
                    <li>Behave gender friendly</li>
                </ul>
            </div>

            <div class="column" style="margin-top: 0">
                <div class="header">
                    Users' Responsibility
                </div>
                <ul class="list"  style="color: #444; margin-top: 15px">
                    <li>Fasten seat belt</li>
                    <li>Not gossip with the driver as it may cause distraction of safe driving</li>
                    <li>Not instruct drivers regarding driving</li>
                    <li>Not smoke in the vehicle which may cause bad headache or disturbance for safe driving</li>
                    <li>Not speak loudly that may case distraction</li>
                    <li>Not ask driver to play DVD player</li>
                    <li>Give a 10-15 minutes break every 2 hours in case of long journey</li>
                    <li>Avoid journey in mid-night and just after taking lunch except emergency</li> 
                    <li>Follow and insist driver to follow the speed limit of BRAC</li>
                    <li>Behave gender friendly</li>
                </ul>
            </div>
        </div>
    </div>


    </div>
    <?php
}
?>