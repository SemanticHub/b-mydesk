<?php
/* @var $this AbuserViolenceController */
/* @var $model AbuserViolence */

$this->breadcrumbs=array(
	'Abuser Violences'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AbuserViolence', 'url'=>array('index')),
	array('label'=>'Manage AbuserViolence', 'url'=>array('admin')),
);
?>

<h1>Create AbuserViolence</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>