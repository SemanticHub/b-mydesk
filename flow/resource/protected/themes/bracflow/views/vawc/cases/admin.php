<?php
$this->layout = "//layouts/column2_vawc";
$this->renderPartial('//vawc/default/_menu', array('active' => 'group'));
$GLOBALS['vt'] = $violanceTypes;

function getTypeName($index) {
    return $GLOBALS['vt'][$index];
}
?>
<h3 class="ui header dividing" style="margin-top: 0">VAWC Cases</h3>
<a class="ui blue button mini labeled icon" style="white-space: nowrap" href="/vawc/cases/create"><i class="add icon"></i>New Case</a>
<div id="view-modal" class="view ui modal" style="background: #eee">Loading...</div>
<script type="text/javascript">
    $(function () {
        $('a.view.view-popup').on('click', function (e) {
            var t = ($(e.target).hasClass('view') ? $(e.target) : $(e.target).prev('a'));
            $('#loading').show();
            $.ajax({
                url: t.attr('href'),
                success: function (data) {
                    $('#view-modal').html(data);
                    $('.view.ui.modal').modal('setting', 'transition', "vertical flip").modal('show');
                    $('.view.ui.modal').modal('attach events', '.ui.button.small.close', 'hide');
                    $('.view.ui.modal').modal('attach events', '.top-close-button', 'hide');
                    $('#loading').hide();
                }
            });
            return false;
        })
    });
    function viewUpdate(id, data) {
        $('.button-column a.view').on('click', function (e) {
            var t = ($(e.target).hasClass('view') ? $(e.target) : $(e.target).prev('a'));
            $('#loading').show();
            $.ajax({
                url: t.attr('href'),
                success: function (data) {
                    $('#view-modal').html(data);
                    $('.view.ui.modal').modal('setting', 'transition', "vertical flip").modal('show');
                    $('.view.ui.modal').modal('attach events', '.ui.button.small.close', 'hide');
                    $('.view.ui.modal').modal('attach events', '.top-close-button', 'hide');
                    $('#loading').hide();
                }
            });
            return false;
        })
    }
</script>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'cases-grid',
    'itemsCssClass' => 'ui basic table segment',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'afterAjaxUpdate' => 'viewUpdate',
    'columns' => array(
        array(
            'header' => '#',
            'value'  => '$this->grid->dataProvider->pagination->itemCount - ($this->grid->dataProvider->pagination->pageSize * ($this->grid->dataProvider->pagination->currentPage)) - $row',
            'htmlOptions' => array('style'=>'font-weight:bold')
        ),
        array(
            'name' => 'violance_type',
            'value' => 'getTypeName($data->violance_type)',
        ),
        //'case_summary',
        array(
            'name' => 'case_summary',
            'filter' => false,
        ),
        //'caller_name',
        //'caller_mobile',
        array(
            'name' => 'caller_name',
            'header' => 'Caller',
            'type' => 'html',
            'value' => 'getCallerInfo($data->caller_name, $data->caller_mobile, $data->caller_address)'
        ),
//        array(
//            'name' => 'caller_address',
//            'filter' => false,
//        ),
        array(
            'name' => 'created_time',
            'header' => 'Time',
            'filter' => false,
            'value' => 'Yii::app()->dateFormatter->format("d MMM, y h:mm a",strtotime($data->created_time))'
        ),
        array(
            'name' => 'id',
            'header' => 'Details',
            'sortable' => true,
            'type' => 'html',
            'value' => 'getCaseId($data->id)'
        ),
//        array(
//            'class' => 'CButtonColumn',
//            'template' => '{view}',
//            'viewButtonImageUrl' => false,
//            'viewButtonLabel' => 'Details',
//            'viewButtonOptions' => array('class' => 'view ui teal button mini icon')
//        ),
    ),
));

function getCallerInfo($caller_name, $caller_mobile, $caller_address) {
    return $caller_name . "<br />" . $caller_mobile . "<br />Address: " . ( empty($caller_address) ? "N/A" : $caller_address );
}

function getCaseId($id) {
    return '<b><a href="/vawc/cases/view?id=' . $id . '" class="view view-popup">CASE/' . $id . '</a></b>';
}
?>

