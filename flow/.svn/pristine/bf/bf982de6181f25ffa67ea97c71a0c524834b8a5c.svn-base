<?php
/* @var $this SmsGroupController */
/* @var $model SmsGroup */

$this->breadcrumbs=array(
	'Sms Groups'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List SmsGroup', 'url'=>array('index')),
	array('label'=>'Create SmsGroup', 'url'=>array('create')),
	array('label'=>'Update SmsGroup', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SmsGroup', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SmsGroup', 'url'=>array('admin')),
);
?>

<h1>View SmsGroup #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'user_id',
		'department',
		'create_by',
		'create_time',
	),
)); ?>
