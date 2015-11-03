<?php
/* @var $this SmsGroupMemberController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sms Group Members',
);

$this->menu=array(
	array('label'=>'Create SmsGroupMembers', 'url'=>array('create')),
	array('label'=>'Manage SmsGroupMembers', 'url'=>array('admin')),
);
?>

<h1>Sms Group Members</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
