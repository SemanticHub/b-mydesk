<?php
/* @var $this SmsappController */
/* @var $model SmsApp */

$this->breadcrumbs=array(
	'Sms Apps'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SmsApp', 'url'=>array('index')),
	array('label'=>'Create SmsApp', 'url'=>array('create')),
	array('label'=>'Update SmsApp', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SmsApp', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SmsApp', 'url'=>array('admin')),
);
?>

<h1>View SmsApp #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'app_name',
		'department',
		'token',
		'user_id',
		'app_url',
		'active',
	),
)); ?>
