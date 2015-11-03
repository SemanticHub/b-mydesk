<?php
/* @var $this SmsOutController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sms Outs',
);

$this->menu=array(
	array('label'=>'Create SmsOut', 'url'=>array('create')),
	array('label'=>'Manage SmsOut', 'url'=>array('admin')),
);
?>

<h1>Sms Outs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
