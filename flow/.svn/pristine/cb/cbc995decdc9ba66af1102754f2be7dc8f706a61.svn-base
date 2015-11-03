<?php
/* @var $this AbuserController */
/* @var $model Abuser */

$this->breadcrumbs=array(
	'Abusers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Abuser', 'url'=>array('index')),
	array('label'=>'Create Abuser', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#abuser-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Abusers</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'abuser-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'gender',
		'name',
		'age',
		'marrital_status',
		'occupation',
		/*
		'religion',
		'economic_status',
		'social_status',
		'location',
		'current_location',
		'address',
		'district',
		'village',
		'upazilla',
		'police_station',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
