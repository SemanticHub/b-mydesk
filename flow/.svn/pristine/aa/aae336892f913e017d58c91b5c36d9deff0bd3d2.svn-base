<?php
/* @var $this SmsOutController */
/* @var $model SmsOut */

$this->breadcrumbs=array(
	'Sms Outs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SmsOut', 'url'=>array('index')),
	array('label'=>'Create SmsOut', 'url'=>array('create')),
	array('label'=>'Update SmsOut', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SmsOut', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SmsOut', 'url'=>array('admin')),
);
?>

<h1>View SmsOut #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'group_id',
		'message',
		'message_type',
		'department',
		'mask',
		'to_number',
		'create_by',
		'create_time',
		'priority',
		'status',
		'responce_code',
		'sent_time',
	),
)); ?>
