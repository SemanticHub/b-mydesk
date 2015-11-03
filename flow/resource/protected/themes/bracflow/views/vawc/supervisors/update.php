<?php
/* @var $this SupervisorsController */
/* @var $model Supervisors */

$this->breadcrumbs=array(
	'Supervisors'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Supervisors', 'url'=>array('index')),
	array('label'=>'Create Supervisors', 'url'=>array('create')),
	array('label'=>'View Supervisors', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Supervisors', 'url'=>array('admin')),
);
?>

<h1>Update Supervisors <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>