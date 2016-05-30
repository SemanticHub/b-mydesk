<?php
$this->layout = "//layouts/column2_inn";
?>
<style type="text/css">
    .required { color: #ff0000;font-weight: bold;font-size: 2em;line-height: 13px;vertical-align: text-bottom;}
</style>
<div class="ui primary  menu">
    <a href="/inn/default/admin" class=" item">
        Token List
    </a>
    <a href="/inn/cash/admin" class=" item">
        Cash Refill
    </a>
    <a href="/inn/cash/print" class="active item">
        Cash to Token
    </a>
    <a href="/inn/holiday/admin" class=" item">
        Setup Holidays
    </a>
</div>
<h3 class="ui dividing header">
    <i class="print icon"></i>
    <div class="content">Token Print</div>
</h3>

<?php $this->renderPartial('_print', array('model' => $model)); ?>