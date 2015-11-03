<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/custom/javascript/jq-datetime-picker/dist/smoothness/jquery-ui-1.10.4.custom.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/custom/javascript/jq-datetime-picker/dist/jquery-ui-timepicker-addon.min.css">

<?php
$this->layout = "//layouts/column2_com";
?>
<h3 class="ui header dividing" style="margin-top: 0">Requisition Reports </h3>

<?php
$this->renderPartial('//communications/default/_menu', array('active' => 'form'));
//$this->renderPartial('_form', array('billingDept'=>$billingDept)); 
?>
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'requisition-report-form',
    'htmlOptions' => array('class' => 'ui form')
        ));
?>
<style type="text/css">
    .grid-view .summary{ margin: -60px 0px 0px 0px !important}
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
    .grid-view div.summary
    {
        display:none;
    }
    </style>
    

<div class="ui fluid form segment" style="background: rgba(0, 0, 0 , 0.1); margin-top: 0">    
    <div class="ui grid com-form  middle aligned">        
        <div class="five wide column" style="margin: 0px;">
            <div class="field">
                <?php echo CHtml::label('Billing Department'); ?>
                <div class="ui mini input">   
                    <?php
                    
                    echo CHtml::dropDownList('billingDept',$postVal['bill_dept'],$billingDept, array('class' => 'ui mini selection','empty'=>'Select a Department')
                          
                            );
                    ?>                   
                </div>
                <?php //echo CHtml::error( 'item');  ?>
            </div>            
        </div>        

        <div class="four wide column"  style="margin: 0px;">
            <div class="field">
                <?php echo CHtml::label('fromdate'); ?>
                <div class="ui mini input">
                    <?php echo CHtml::textField('fromdate', $postVal['from_date'], array('class' => 'fromdate')); ?>
                </div>
                <?php //echo CHtml::error( 'fromdate');  ?>
            </div>  
        </div>

        <div class="four wide column"  style="margin: 0px;">
            <div class="field">
                <?php echo CHtml::label('todate'); ?>
                <div class="ui mini input">
                    <?php echo CHtml::textField('todate',$postVal['to_date'], array('class' => 'todate')); ?>
                </div>
                <?php //echo CHtml::error( 'todate');  ?>
            </div>            
        </div> 
        <div class="three wide column"  style="margin: 0px;">
            <div class="row buttons" style="text-align: right;">
        <?php //echo CHtml::submitButton($model->isNewRecord ? 'Submit' : 'Submit',  array('class'=>'ui right small submit teal labeled icon button'));      ?>
        <div class="ui right small submit teal labeled icon button" id="reportButton">
            <i class="right arrow icon"></i>
            Send
        </div>
    </div>
        </div>

    </div>        
</div>
<div>
<?php if(TeamMembers::isServiceTeamMember('photography')) { ?>
<h4 class="ui  dividing  header" style="margin-top: 0" id='headerTop'>
    Photography Service Report
    <div style=float:right>
        <?php
        if ($postVal['bill_dept'])
            echo "<span class= 'ui tag label'>" . $postVal['bill_dept'] . "</span>";
        ?>  

        <?php
        if ($postVal['from_date'] && $postVal['to_date']) {
            $from_date = new DateTime($postVal['from_date']);
            $from_date = $from_date->format('d F Y');
            $to_date = new DateTime($postVal['to_date']);
            $to_date = $to_date->format('d F Y');
            echo "<span  class= 'ui tag label'>Date: " . $from_date . " to " . $to_date . "</span>";
        }
        ?>    
    </div>
    </h4>
        

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    //'id' => 'communications-grid-photography',
    'dataProvider' => $dataPhotography,
    'itemsCssClass' => 'ui basic table segment',
    'columns' => array(
        'id',
        array(
            'name' => 'item',
            'type' => 'raw',
            'value' => 'Settings::model()->findByPk($data->item)->item',
        ),
        'days',
        'location',
        array(
            'name' => 'fromdate',
            'value' => 'Yii::app()->dateFormatter->format("d MMM, y",strtotime($data->fromdate))'
        ),
        array(
            'name' => 'todate',
            'value' => 'Yii::app()->dateFormatter->format("d MMM, y",strtotime($data->todate))'
        ),
        array(
            'name' => 'est_total',
            'value' => '"BDT-".$data->est_total',
            'htmlOptions' => array('style' => 'font-weight:bold;')
        ),
  

    ),
));
?>

<hr />
<?php } ?>


<?php if(TeamMembers::isServiceTeamMember('design')) { ?>
<br />
<h4 class="ui  dividing  header" style="margin-top: 0" id='headerTop'>Design Service Report
        <div style=float:right>
        <?php
        
        if ($postVal['bill_dept'])
            echo "<span class= 'ui tag label'>" . $postVal['bill_dept'] . "</span>";
        ?>  

        <?php
        if ($postVal['from_date'] && $postVal['to_date']) {          
            echo "<span  class= 'ui tag label'>Date: " . $from_date . " to " . $to_date . "</span>";
        }
         ?>    
    </div>
    </h4>
        

<?php
        

$this->widget('zii.widgets.grid.CGridView', array(
    //'id' => 'communications-grid-design',
    'dataProvider' => $dataDesign,
    'summaryText'=>'',
    'itemsCssClass' => 'ui basic table segment',
    'columns' => array(
        'id',
        array(
            'name' => 'item_id',
            'type' => 'raw',
            'value' => 'Settings::model()->findByPk($data->item_id)->item',
        ),
        'size',
        'color',
        'qty',
        array(
            'name' => 'est_delivery_date',
            'value' => 'Yii::app()->dateFormatter->format("d MMM, y",strtotime($data->est_delivery_date))'
        ),
        'brief',
        array(
            'name' => 'est_total',
            'value' => '"BDT-".$data->est_total',
            'htmlOptions' => array('style' => 'font-weight:bold;')
        ),
  
    ),
));
?>
<hr />
<?php } ?>

<?php if(TeamMembers::isServiceTeamMember('audiovisual')) { ?>
<br />
<h4 class="ui  dividing  header" style="margin-top: 0" id='headerTop'>Audio/Visual Service Report

        <div style=float:right>
        <?php
        
        if ($postVal['bill_dept'])
            echo "<span class= 'ui tag label'>" . $postVal['bill_dept'] . "</span>";
        ?>  

        <?php
        if ($postVal['from_date'] && $postVal['to_date']) {          
            echo "<span  class='ui tag label'>Date: " . $from_date . " to " . $to_date . "</span>";
        }
        ?>
       </div>
</h4>
        <?php
$this->widget('zii.widgets.grid.CGridView', array(
   // 'id' => 'communications-grid-audiovisual',
    'dataProvider' => $dataAudiovisual,
    'itemsCssClass' => 'ui basic table segment',
    //'filter'=>$model,
    'columns' => array(
        'id',            
        array(
            'name' => 'item_id',
            'type' => 'raw',
            'value' => 'Settings::model()->findByPk($data->item_id)->item',
        ),
        'duration',
        array(
            'name' => 'est_delivery_date',
            'value' => 'Yii::app()->dateFormatter->format("d MMM, y",strtotime($data->est_delivery_date))'
        ),
        'brief',
        array(
            'name' => 'est_total',
            'value' => '"BDT-".$data->est_total',
            'htmlOptions' => array('style' => 'font-weight:bold;')
        ),      
    ),
));
?>
<hr />
<?php } ?>

<?php if(TeamMembers::isServiceTeamMember('printing')) { ?>
<br />
<h4 class="ui  dividing  header" style="margin-top: 0" id='headerTop'>Printing Service Report
        
        
       <div style=float:right>
        <?php
        
        if ($postVal['bill_dept'])
            echo "<span class= 'ui tag label'>" . $postVal['bill_dept'] . "</span>";
        ?>  

        <?php
        if ($postVal['from_date'] && $postVal['to_date']) {          
            echo "<span class= 'ui tag label'>Date: " . $from_date . " to " . $to_date . "</span>";
        }
        ?>
       </div>
    </h4>
        <?php
        

$this->widget('zii.widgets.grid.CGridView', array(
    //'id' => 'communications-grid-printing',
    'dataProvider' => $dataPrinting,
    'itemsCssClass' => 'ui basic table segment',
    'columns' => array(
        'id',
        'item_id',
        array(
            'name' => 'design_id',
            'type' => 'raw',
            'value' => 'Settings::model()->findByPk($data->design_id)->type',
        ),
        'qty',
        'brief',
        array(
            'name' => 'est_total',
            'value' => '"BDT-".$data->est_total',
            'htmlOptions' => array('style' => 'font-weight:bold;')
        ),
   
    ),
));
?>
<hr />
<?php } ?>
    

</div>





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
                            // don't call model api was used and not key press
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

    //$('#Photography_fromdate, #Photography_todate').datetimepicker({
    $('#fromdate, #todate').datepicker({
        //controlType: myControl,
        //timeFormat: 'HH:mm',
        dateFormat: 'yy-mm-dd'
    });
    
    
    $().ready(function(){
    $('#reportButton').click(function(){
        $('#myDiv').toggleClass('show');
    });
});


    
</script>

<?php $this->endWidget(); ?>

