<?php
/* @var $this AbuserViolenceController */
/* @var $model AbuserViolence */

$this->breadcrumbs=array(
	'Abuser Violences'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AbuserViolence', 'url'=>array('index')),
	array('label'=>'Create AbuserViolence', 'url'=>array('create')),
	array('label'=>'Update AbuserViolence', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AbuserViolence', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AbuserViolence', 'url'=>array('admin')),
);
?>

<h1>View AbuserViolence #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'violence_info_id',
		'abuser_id',
	),
)); ?>
