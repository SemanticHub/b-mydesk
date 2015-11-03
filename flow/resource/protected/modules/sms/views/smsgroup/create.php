<?php
/* @var $this SmsGroupController */
/* @var $model SmsGroup */

$this->breadcrumbs=array(
	'Sms Groups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SmsGroup', 'url'=>array('index')),
	array('label'=>'Manage SmsGroup', 'url'=>array('admin')),
);
?>

<h1>Create SmsGroup</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>