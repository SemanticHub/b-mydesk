<?php
$this->menu = array(
    array(
        'label' => 'Navigation',
        'url' => '#',
        'visible' => 'separator',
    ),
    array(
        'label' => 'Send SMS', 
        'url' => array('//sms'), 
        'visible' => true,
        'icon' => '<i class="mail outline icon"></i>',
        'active' => (Yii::app()->controller->id == 'default' && Yii::app()->controller->action->id == 'index' ? 'active' : false ),
    ),
    array(
        'label' => 'Groups', 
        'url' => array('//sms/smsgroup'), 
        'visible' => true,
        'icon' => '<i class="users icon"></i>',
        'active' => (Yii::app()->controller->id == 'smsgroup' ? 'active' : false ),
    ),
    array(
        'label' => 'Report', 
        'url' => array('//sms/smsout/report'), 
        'visible' => SmsSupervisors::model()->isReportSupervisor(),
        'icon' => '<i class="map icon"></i>',
        'active' => (Yii::app()->controller->id == 'smsout' ? 'active' : false ),
    ),
     array(
        'label' => 'Log Report', 
        'url' => array('//sms/smsout/reportDetails'), 
        'visible' => SmsSupervisors::model()->isReportSupervisor(),
        'icon' => '<i class="print icon"></i>',
        'active' => (Yii::app()->controller->id == 'smsout' ? 'active' : false ),
    ),
);
?>
