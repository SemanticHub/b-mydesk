<?php
/* @var $this SmsSupervisorController */
/* @var $model SmsSupervisors */

$this->breadcrumbs=array(
	'Sms Supervisors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SmsSupervisors', 'url'=>array('index')),
	array('label'=>'Manage SmsSupervisors', 'url'=>array('admin')),
);
?>

<h1>Create SmsSupervisors</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>