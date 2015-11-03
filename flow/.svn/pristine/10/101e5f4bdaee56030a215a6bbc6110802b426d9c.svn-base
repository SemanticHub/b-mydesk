<?php
$this->layout = "//layouts/column2_vawc";
$this->renderPartial('//vawc/default/_menu', array('active' => 'group'));
?>

<h3 class="ui header dividing" style="margin-top: 0">Manage Groups</h3>
<a class="ui  blue button mini labeled icon" style="white-space: nowrap" href="/vawc/groups/create"><i class="add icon"></i>New Group</a>
<a class="ui  blue button mini labeled icon" style="white-space: nowrap" href="/vawc/cases/create"><i class="add icon"></i>New Case</a>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'sms-group-grid',
    'dataProvider' => $dataProvider,
    'itemsCssClass' => 'ui basic table segment',
    'columns' => array(
        'name',
        'details',
        array(
            'class' => 'CButtonColumn',
        ),
)));

function getUserName($groupId) {
    $usrePin = User::model()->findByPk(GroupShare::model()->findByAttributes(array("group_id" => $groupId))->shareby_user_id)->username;
    if (!empty($usrePin)) {
        $hrd = new HrdService();
        $hrdUser = $hrd->getHrUser($usrePin);
        return ($hrdUser[0]['Fname']) . " " . ($hrdUser[0]['Mname']) . " " . ($hrdUser[0]['Lname']);
    } else {
        return "";
    }
}
?>

<?php // $this->widget('zii.widgets.grid.CGridView', array(
	//'id'=>'groups-grid',
	//'dataProvider'=>$model->search(),
	//'filter'=>$model,
	//'columns'=>array(
	//	'id',
	//	'name',
	//	'details',
	//	'status',
	//	'created_by',
	//	'created_time',
		/*
		'updated_by',
		'updated_time',
		*/
	//	array(
	//		'class'=>'CButtonColumn',
	//	),
	//),
//)); ?>
