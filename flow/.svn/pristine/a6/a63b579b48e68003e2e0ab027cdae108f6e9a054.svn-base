<?php $this->layout = "//layouts/column2_com"; ?>

<h3 class="ui  dividing  header" style="margin-top: 0" id='headerTop'>Service Requests Feedback</h3>
<div id="view-modal" class="view ui modal " style="background: #eee">Loading...</div>
<?php $this->renderPartial('_menu', array('active' => 'user')); ?>
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'feedack-form',
    'enableAjaxValidation' => false,
    'htmlOptions' => array('class' => 'ui form')
        ));
?>

<div class="ui fluid form segment" style="background: rgba(0, 0, 0 , 0.1); margin-top: 0"> 
    <?php $service = Yii::app()->request->getParam('service'); ?>
    <?php if ($service == "photography") { ?>          

        <div class="ui list feedback-info clearfix">
            <div class="item">
                <label>Service Type</label> <?php echo $service ?>
            </div>
            <div class="item">
                <label>Package</label> <?php echo Settings::model()->findByPk($model->item)->item; ?>
            </div>
            <div class="item">
                <label>Days</label> <?php echo $model->days ?> ( <?php echo $model->fromdate ?> to <?php echo $model->todate ?> )
            </div>
            <div class="item">
                <label>Location</label> <?php echo $model->location; ?>
            </div>
            <div class="item">
                <label>Estimated Total</label> BDT <?php echo $model->est_total; ?>
            </div>
            <div class="item">
                <label>Brief</label> <?php echo $model->brief; ?>
            </div>
        </div>
    <?php } ?>  


    <?php if ($service == "design") { ?> 
        <div class="ui list feedback-info clearfix">
            <div class="item">
                <label>Service Type: </label> <?php echo $service ?> 
            </div>
            <div class="item">
                <label>Package: </label> <?php echo Settings::model()->findByPk($model->item_id)->item; ?> 
            </div>
            <div class="item">
                <label>size: </label> <?php echo $model->size; ?>
            </div>
            <div class="item">
                <label>color: </label> <?php echo $model->color; ?> 
            </div>
            <div class="item">
                <label>qty: </label> <?php echo $model->qty; ?>
            </div>
            <div class="item">
                <label>Estimated Total: </label> BDT <?php echo $model->est_total; ?>
            </div>
            <div class="item">
                <label>Brief: </label> <?php echo $model->brief; ?>            
            </div>
        </div>
    <?php } ?>  

    <?php if ($service == "audiovisual") { ?>  
        <div class="ui list feedback-info clearfix">
            <div class="item">
                <label>Service Type: </label> <?php echo $service ?> 
            </div>
            <div class="item">
                <label>Package: </label>  <?php echo Settings::model()->findByPk($model->item_id)->item; ?> 
            </div>
            <div class="item">
                <label>duration: </label> <?php echo $model->duration; ?>             
            </div>
            <div class="item">
                <label>Estimated Total: </label> BDT <?php echo $model->est_total; ?>
            </div>
            <div class="item">
                <label>Brief: </label> <?php echo $model->brief; ?>
            </div>
        </div>
    <?php } ?>

    <?php if ($service == "printing") { ?>        
        <div class="ui list feedback-info clearfix">
            <div class="item">
                <label>Service Type: </label>  <?php echo $service ?> 
            </div>
            <div class="item">
                <label>Package: </label> <?php echo $model->item_id; ?> 
            </div>
            <div class="item">
                <label>Print Type:</label> 
                <?php echo Settings::model()->findByPk($model->design_id)->type ?> <br/><br/> 
            </div>
            <div class="item">
                <label>Estimated Total: </label>
                BDT <?php echo $model->est_total; ?>
            </div>
            <div class="item">
                <label>Brief: </label> 
                <?php echo $model->brief; ?>
            </div>
        </div>
    <?php } ?> 

    <div class="field">
        <?php echo $form->labelEx($model, 'feedback_procecss'); ?>
        <div class="ui mini feedback-options">   
            <?php
            echo $form->radioButtonList($model, 'feedback_procecss', $feedback_process_options);
            ?>             
        </div>
        <?php echo $form->error($model, 'feedback_procecss'); ?>
    </div>
    <div class="field">
        <?php echo $form->labelEx($model, 'feedback_time'); ?>
        <div class="ui mini feedback-options">   
            <?php
            echo $form->radioButtonList($model, 'feedback_time', $feedback_time_options);
            ?>                          
        </div>
        <?php echo $form->error($model, 'feedback_time'); ?>
    </div>
    <div class="field">
        <?php echo $form->labelEx($model, 'feedback_quality'); ?>
        <div class="ui mini  feedback-options">   
            <?php
            echo $form->radioButtonList($model, 'feedback_quality', $feedback_quality_options);
            ?>             
        </div>
        <?php echo $form->error($model, 'feedback_quality'); ?>
    </div>                
</div> 

<div class="four wide column middle column row">
    <div class="row buttons" style="text-align: right;">
        <div class="ui right small submit teal labeled icon button">
            <i class="right arrow icon"></i>
            Send
        </div>
    </div>
</div>
<?php $this->endWidget(); ?>

