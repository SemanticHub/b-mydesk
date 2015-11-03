<?php
/* @var $this SmsGroupController */
/* @var $model SmsGroup */

$this->breadcrumbs=array(
	'Sms Groups'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SmsGroup', 'url'=>array('index')),
	array('label'=>'Create SmsGroup', 'url'=>array('create')),
	array('label'=>'View SmsGroup', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SmsGroup', 'url'=>array('admin')),
);
?>

<h1>Update SmsGroup <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>