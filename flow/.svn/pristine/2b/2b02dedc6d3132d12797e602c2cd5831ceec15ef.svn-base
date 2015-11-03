<?php
/* @var $this SmsOutController */
/* @var $model SmsOut */

$this->breadcrumbs=array(
	'Sms Outs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SmsOut', 'url'=>array('index')),
	array('label'=>'Create SmsOut', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sms-out-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Sms Outs</h1>

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
	'id'=>'sms-out-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'group_id',
		'message',
		'message_type',
		'department',
		'mask',
		/*
		'to_number',
		'create_by',
		'create_time',
		'priority',
		'status',
		'responce_code',
		'sent_time',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
