<?php
$this->layout = "//layouts/column2_sms";
$this->renderPartial('//sms/default/_menu', array('active' => 'sms'));
?>
<h3 class="ui header dividing" style="margin-top: 0">Manage Group Members</h3>

<a class="ui label" style="white-space: nowrap" href="/sms/smsgroupmember/create"><i class="add icon"></i>Add Group Member</a>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'sms-group-members-grid',
    'dataProvider' => $dataProvider,
    'itemsCssClass' => 'ui basic table segment',
    'columns' => array(
        'id',
        'group_id',
        'member_id',
        'member_pin',
        'member_phone',
        'member_name',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
