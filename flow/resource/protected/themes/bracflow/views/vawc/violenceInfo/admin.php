<style>
    #transport-grid table th a{
        font-weight: bold; color: #999; border-bottom: 1px dashed #ccc;
    }
    .ui.message.warning {
        border: 1px dashed;
    }
</style>
<?php
$this->layout = "//layouts/column2_vawc";
$this->renderPartial('//vawc/default/_menu', array('active' => 'group'));
?>
<h3 class="ui header dividing" style="margin-top: 0">VAWC Violence Infos</h3>
<a class="ui  blue button mini labeled icon" style="white-space: nowrap" href="/vawc/violenceInfo/create"><i class="add icon"></i>New Violence Info</a>
<div id="view-modal" class="view ui modal" style="background: #eee">Loading...</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'violence-info-grid',
        'itemsCssClass' => 'ui basic table segment',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'reporter_name',
		'reporter_designation',
		'reporter_pin',
		'reporter_program',
		'reporter_branch',
		/*
		'reporter_upazilla',
		'reporter_district',
		'violence_headline',
		'reporting_time',
		'victim_info_given',
		'victim_name',
		'victim_gender',
		'victim_age',
		'victim_occupation',
		'victim_father',
		'victim_mother',
		'victim_husband',
		'victim_autism',
		'victim_address',
		'victim_village',
		'victim_postoffice',
		'victim_upazilla',
		'victim_district',
		'victim_marrital_status',
		'victim_economic_status',
		'victim_religion',
		'victim_association',
		'victim_supporter',
		'brac_contribution',
		'victim_firstaid_status',
		'victim_report_condition',
		'legal_step',
		'victim_abuser_relation',
		'violence_description',
		'violence_location',
		'case_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
