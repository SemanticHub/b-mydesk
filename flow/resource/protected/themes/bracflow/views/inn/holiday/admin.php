<?php
$this->layout = "//layouts/column2_inn";
?>
<div class="ui primary  menu">
    <a href="/inn/default/admin" class=" item">
        Token List
    </a>
    <a href="/inn/cash/admin" class="item">
        Cash Refill
    </a>
    <a href="/inn/cash/print" class="item">
        Cash to Token
    </a>
    <a href="/inn/holiday/admin" class="active item">
        Setup Holidays
    </a>
</div>
<h3 class="ui dividing header">
    <i class="setting icon"></i>
    <div class="content">Setup Holidays</div>
</h3>
<a href="/inn/holiday/create" class="ui blue tiny labeled icon button" style="margin-bottom: 15px">
    <i class="add sign icon"></i>
    New Holiday
</a>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'holiday-grid',
    'htmlOptions' => array('class' => 'grid-view'),
    'itemsCssClass' => 'ui very basic celled table',
    'dataProvider' => $model->search(),
    'columns' => array(
        array(
            'name' => 'holiday',
            'header' => 'Name',
            'value' => 'Yii::app()->dateFormatter->format("EEEE, d MMM, y",strtotime($data->holiday))'
        ),
        'description',
        array(
            'class' => 'CButtonColumn',
            'template' => "{update}"
        ),
    ),
));
?>
