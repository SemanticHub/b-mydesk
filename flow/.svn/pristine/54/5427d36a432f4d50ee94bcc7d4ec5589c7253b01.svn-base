<?php
$this->layout = "//layouts/column2_vawc";
$this->renderPartial('//vawc/default/_menu', array('active' => 'sms'));
?>
<h3 class="ui header dividing" style="margin-top: 0">Manage Groups</h3>
<a class="ui label" style="white-space: nowrap" href="/vawc/groups/create"><i class="add icon"></i>New Group</a>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
