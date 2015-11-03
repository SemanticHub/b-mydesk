<?php
/* @var $this ViolenceInfoController */
/* @var $model ViolenceInfo */

$this->breadcrumbs=array(
	'Violence Infos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ViolenceInfo', 'url'=>array('index')),
	array('label'=>'Create ViolenceInfo', 'url'=>array('create')),
	array('label'=>'View ViolenceInfo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ViolenceInfo', 'url'=>array('admin')),
);
?>

<h1>Update ViolenceInfo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>