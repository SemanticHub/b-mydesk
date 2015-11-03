<?php
/* @var $this SupervisorsController */
/* @var $model Supervisors */

$this->breadcrumbs=array(
	'Supervisors'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Supervisors', 'url'=>array('index')),
	array('label'=>'Create Supervisors', 'url'=>array('create')),
	array('label'=>'Update Supervisors', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Supervisors', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Supervisors', 'url'=>array('admin')),
);
?>

<h1>View Supervisors #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pin',
		'name',
		'designation',
		'dept',
		'status',
		'special',
	),
)); ?>
