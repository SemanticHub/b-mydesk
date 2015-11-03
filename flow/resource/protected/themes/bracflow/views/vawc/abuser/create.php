<?php
/* @var $this AbuserController */
/* @var $model Abuser */

$this->breadcrumbs=array(
	'Abusers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Abuser', 'url'=>array('index')),
	array('label'=>'Manage Abuser', 'url'=>array('admin')),
);
?>

<h1>Create Abuser</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>