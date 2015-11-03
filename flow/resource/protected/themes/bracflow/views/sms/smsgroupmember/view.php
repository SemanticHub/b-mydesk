<?php
$this->layout = "//layouts/column2_sms";
$this->renderPartial('//sms/default/_menu', array('active' => 'sms'));
?>
<h3 class="ui header dividing" style="margin-top: 0">View SMS Group  Member #<?php echo $model->member_name; ?></h3>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions' => array('class' => 'ui table segment view-table'),
	'attributes'=>array(		
		'group_id',		
		'member_pin',
		'member_phone',
		'member_name',
		'create_by',
		'create_time',
	),
)); ?>
