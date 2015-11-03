<?php
/* @var $this SupervisorsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Supervisors',
);

$this->menu=array(
	array('label'=>'Create Supervisors', 'url'=>array('create')),
	array('label'=>'Manage Supervisors', 'url'=>array('admin')),
);
?>

<h1>Supervisors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
