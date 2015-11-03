<?php
/* @var $this SmsGroupMemberController */
/* @var $model SmsGroupMembers */

$this->breadcrumbs=array(
	'Sms Group Members'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SmsGroupMembers', 'url'=>array('index')),
	array('label'=>'Create SmsGroupMembers', 'url'=>array('create')),
	array('label'=>'Update SmsGroupMembers', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SmsGroupMembers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SmsGroupMembers', 'url'=>array('admin')),
);
?>

<h1>View SmsGroupMembers #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'group_id',
		'member_id',
		'member_pin',
		'member_phone',
		'member_name',
		'create_by',
		'create_time',
	),
)); ?>
