<style>
    #transport-grid table th a{
        font-weight: bold; color: #999; border-bottom: 1px dashed #ccc;
    }
    .ui.message.warning {
        border: 1px dashed;
    }
</style>
<?php

$this->layout = "//layouts/column2_sms";
$this->renderPartial('//sms/default/_menu', array('active' => 'sms'));

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sms-out-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<h3 class="ui header dividing" style="margin-top: 0">Log Report</h3>

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'sms-out-grid',
    'itemsCssClass' => 'ui basic table segment',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(        
        array(
            'name' => 'group_id',
            'value' => 'SmsGroup::model()->findByPk($data->group_id)->name',
            'filter' => false,
        ),
        array(
            'name' => 'app_id',
            'value' => 'SmsApp::model()->findByPk($data->app_id)->app_name',
            'filter' => false,
        ),
        'department',
        array(
            'name' => 'to_number',
            'value' => '$data->to_number',
            'filter' => false,
        ),
        
        'message',
        
        array(
            'name' => 'mask',
            'value' => '$data->mask',
            'filter' => false,
        ),
        'create_time',
        //'responce_code',
        array(
            'name' => 'responce_code',            
            'header' => 'Response',
            'value' => 'getResponseText($data->responce_code)',            
        ),
        
        
        /*
          'create_by',
          'priority',
          'status',
          'responce_code',
          'sent_time',
         */        
    ),
));



function getResponseText($data) {
    $resp = explode(',', $data);

    if ($resp[0] == '200')
        return "Success";
    else
    {        
        return $data;
    }
}
?>


