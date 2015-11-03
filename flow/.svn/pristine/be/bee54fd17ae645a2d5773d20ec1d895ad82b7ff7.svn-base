<?php
/* @var $this SmsSupervisorController */
/* @var $model SmsSupervisors */

$this->breadcrumbs=array(
	'Sms Supervisors'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List SmsSupervisors', 'url'=>array('index')),
	array('label'=>'Create SmsSupervisors', 'url'=>array('create')),
	array('label'=>'Update SmsSupervisors', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SmsSupervisors', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SmsSupervisors', 'url'=>array('admin')),
);
?>

<h1>View SmsSupervisors #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pin',
		'name',
		'designation',
		'department',
		'status',
		'special',
		'create_by',
		'create_time',
	),
)); ?>
