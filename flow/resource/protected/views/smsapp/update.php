<?php
/* @var $this SmsappController */
/* @var $model SmsApp */

$this->breadcrumbs=array(
	'Sms Apps'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SmsApp', 'url'=>array('index')),
	array('label'=>'Create SmsApp', 'url'=>array('create')),
	array('label'=>'View SmsApp', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SmsApp', 'url'=>array('admin')),
);
?>

<h1>Update SmsApp <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>