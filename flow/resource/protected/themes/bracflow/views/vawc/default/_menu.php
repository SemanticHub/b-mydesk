<?php
$this->menu = array(
    array(
        'label' => 'Navigation',
        'url' => '#',
        'visible' => 'separator',
    ),
    array(
        'label' => 'Cases', 
        'url' => array('//vawc/cases'), 
        'visible' => true,
        'icon' => '<i class="mail outline icon"></i>',
        'active' => (Yii::app()->controller->id == 'cases' && Yii::app()->controller->action->id == 'index' ? 'active' : false ),
    ),
    array(
        'label' => 'Groups', 
        'url' => array('//vawc/groups'), 
        'visible' => GroupMembers::model()->isCCC(),
        'icon' => '<i class="users icon"></i>',
        'active' => (Yii::app()->controller->id == 'groups' ? 'active' : false ),
    ),
    array(
        'label' => 'Violence Info', 
        'url' => array('//vawc/violenceInfo'), 
        'visible' => GroupMembers::model()->isFCC(),
        'icon' => '<i class="map icon"></i>',
        'active' => (Yii::app()->controller->id == 'violenceInfo' ? 'active' : false ),
    )
);
?>
