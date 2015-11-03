<?php
/* @var $this CasesController */
/* @var $model Cases */

$this->breadcrumbs=array(
	'Cases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cases', 'url'=>array('index')),
	array('label'=>'Manage Cases', 'url'=>array('admin')),
);
?>

<h1>Create Cases</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>