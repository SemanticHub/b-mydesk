<?php
/* @var $this SmsOutController */
/* @var $model SmsOut */

$this->breadcrumbs=array(
	'Sms Outs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SmsOut', 'url'=>array('index')),
	array('label'=>'Manage SmsOut', 'url'=>array('admin')),
);
?>

<h1>Create SmsOut</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>