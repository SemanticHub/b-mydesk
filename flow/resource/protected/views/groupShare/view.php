<?php
/* @var $this GroupShareController */
/* @var $model GroupShare */

$this->breadcrumbs=array(
	'Group Shares'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List GroupShare', 'url'=>array('index')),
	array('label'=>'Create GroupShare', 'url'=>array('create')),
	array('label'=>'Update GroupShare', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete GroupShare', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GroupShare', 'url'=>array('admin')),
);
?>

<h1>View GroupShare #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'group_id',
		'user_id',
		'shareby_user_id',
	),
)); ?>
