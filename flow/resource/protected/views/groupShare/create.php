<?php
/* @var $this GroupShareController */
/* @var $model GroupShare */

$this->breadcrumbs=array(
	'Group Shares'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GroupShare', 'url'=>array('index')),
	array('label'=>'Manage GroupShare', 'url'=>array('admin')),
);
?>

<h1>Create GroupShare</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>