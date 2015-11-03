<?php
/* @var $this AbuserController */
/* @var $model Abuser */

$this->breadcrumbs=array(
	'Abusers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Abuser', 'url'=>array('index')),
	array('label'=>'Create Abuser', 'url'=>array('create')),
	array('label'=>'Update Abuser', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Abuser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Abuser', 'url'=>array('admin')),
);
?>

<h1>View Abuser #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'gender',
		'name',
		'age',
		'marrital_status',
		'occupation',
		'religion',
		'economic_status',
		'social_status',
		'location',
		'current_location',
		'address',
		'district',
		'village',
		'upazilla',
		'police_station',
	),
)); ?>
