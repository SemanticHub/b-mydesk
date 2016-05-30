<?php
$this->layout = "//layouts/column2_inn";
?>
<div class="ui primary  menu">
    <a href="/inn/default/admin" class="item">
        Token List
    </a>
    <a href="/inn/cash/admin" class="active item">
        Cash Refill
    </a>
    <a href="/inn/cash/print" class="item">
        Cash to Token
    </a>
    <a href="/inn/holiday/admin" class="item">
        Setup Holidays
    </a>
</div>
<h3 class="ui dividing header">
    <i class="money icon"></i>
    <div class="content">Manage Cache</div>
</h3>
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'search-form',
    'enableAjaxValidation' => false,
    'action' => Yii::app()->createUrl('/inn/cash/admin/'),
    'htmlOptions' => array('class' => 'ui form')
        ));
?>
<div style=" display: inline-block; width: 250px; position: absolute; right: 0px; top: 0px;">
    <?php
    $date_name = $date_name;
    echo CHtml::dateField('date_name', $date_name, array('id' => 'date_id', 'style' => 'padding:5px; padding: 5px; width: 190px; vertical-align: top; border-radius: 0'));
    echo CHtml::submitButton('Go', array('class' => 'ui small blue submit button', 'style' => 'border-radius:0'))
    ?>
</div>
<?php
$this->endWidget();
?>

<a href="/inn/cash/create" class="ui blue tiny labeled icon button" style="margin-bottom: 15px">
    <i class="add sign icon"></i>
    New Cash Refill
</a>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'cash-grid',
    'htmlOptions' => array('class' => 'grid-view'),
    'itemsCssClass' => 'ui very basic celled table',
    'summaryText' => false,
    'dataProvider' => $dataProvider,
    'columns' => array(
        'id',
        'amount',
        'create_by',
        'create_time',
        'to_pin',
        'initial',
    ),
));
?>
<div class="ui red ribbon label" style="margin-left: 30px; font-weight: bold">
    <i class="food icon"></i> Total Daily Amount: <strong><?php echo ($totalCash[0]['dailyTotal']) ? $totalCash[0]['dailyTotal'] : '0.00'; ?></strong>
</div>
