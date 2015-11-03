<?php
/* @var $this GroupMembersController */
/* @var $model GroupMembers */

$this->breadcrumbs=array(
	'Group Members'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GroupMembers', 'url'=>array('index')),
	array('label'=>'Manage GroupMembers', 'url'=>array('admin')),
);
?>

<h1>Create GroupMembers</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>