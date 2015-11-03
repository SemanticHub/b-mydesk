<?php
/* @var $this GroupShareController */
/* @var $model GroupShare */

$this->breadcrumbs=array(
	'Group Shares'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List GroupShare', 'url'=>array('index')),
	array('label'=>'Create GroupShare', 'url'=>array('create')),
	array('label'=>'View GroupShare', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage GroupShare', 'url'=>array('admin')),
);
?>

<h1>Update GroupShare <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>