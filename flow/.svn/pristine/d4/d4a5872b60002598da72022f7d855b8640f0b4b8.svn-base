<?php
$this->layout = "//layouts/column2_sms";
$this->renderPartial('//sms/default/_menu', array('active' => 'sms'));
?>
<h3 class="ui header dividing" style="margin-top: 0">Manage Groups</h3>
<a class="ui label" style="white-space: nowrap" href="/sms/smsgroup/create"><i class="add icon"></i>Create Group</a>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'sms-group-grid',
    'dataProvider' => $dataProvider,
    'itemsCssClass' => 'ui basic table segment',
    'columns' => array(
        'name',
        'department',
        'description',
        array(
            'header' => 'Shared by',
            'value' => 'getUserName($data->id)',
        ),
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
