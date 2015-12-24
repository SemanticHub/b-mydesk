<?php
$this->layout = "//layouts/column2_inn";
?>
<div class="ui blue ribbon label" style="margin-left: 34px">
    <i class="food icon"></i> Today Total Token: <strong><?php echo $totalToken;?></strong>
</div>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'transport-grid',
    'itemsCssClass' => 'ui basic table segment',
    'dataProvider' => $dataProvider,
    'columns' => array(
        'id',
        'pin',
        'count'
    ),
));
?>