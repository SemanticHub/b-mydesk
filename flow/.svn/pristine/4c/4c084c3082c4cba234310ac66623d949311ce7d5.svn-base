<?php
$this->layout = "//layouts/column2_vawc";
$this->renderPartial('//vawc/default/_menu', array('active' => 'sms'));
?>
<h3 class="ui header dividing" style="margin-top: 0"><?php echo $model->name; ?></h3>
<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'htmlOptions' => array('class' => 'ui table segment view-table'),
    'attributes' => array(
        'name',
        'details',
        array(
            'name' => 'created_by',
            'type' => 'raw',
            'value' => User::model()->findByPk($model->created_by)->username,
        ),
        'created_time',
    ),
));
?>
<br />

<a id="view-member" class="ui label" style="white-space: nowrap" href="/vawc/members/create?group_id=<?php echo $_REQUEST['id']; ?>"><i class="add icon"></i>Add Member</a>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'vawc-group-members-grid',
    'dataProvider' => $dataProvider,
    'itemsCssClass' => 'ui basic table segment',
    //'filter' => SmsGroupMembers::model(),
    'columns' => array(
        //'id',
        //'group_id',
        //'member_id',
        //'member_pin',                
        'name',
        'phone',
        'pin',
        'email',
        'program',
        array(
            'class' => 'CButtonColumn',
            'template' => '{update}{delete}',          
            'deleteButtonUrl' => 'Yii::app()->createUrl("/vawc/members/delete", array("id" => $data["member_id"]))',
            'updateButtonUrl' => 'Yii::app()->createUrl("/vawc/members/update", array("id" => $data["member_id"], "gid" => $data["group_id"]))',
        ),
    ),
));
?>
<div id="view-modal" class="view ui modal " style="background: #eee; width: auto">Loading...</div>
<script type="text/javascript">
    $(function () {
        $('#view-member').on('click', function (e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            $('#loading').show();
            $.ajax({
                async: false,
                url: $(e.target).attr('href'),
                success: function (data) {
                    if ($('#view-modal')) {
                        $('#view-modal').html(data);
                        $('#view-modal').modal();
                        $('#view-modal').modal('hide', function () {
                            $('#view-modal').empty()
                        });
                        $('#view-modal').modal('setting', 'transition', "vertical flip");
                        $('#view-modal').modal('attach events', '.top-close-button', 'hide');
                        $('#view-modal').modal('show');
                        $('#loading').hide();
                    }
                }
            });
            return false;
        });
    });
</script>
<div id="share-modal" class="view ui modal " style="background: #eee; width: auto">Loading...</div>

<script type="text/javascript">
    $(function () {
        $('#share').on('click', function (e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            $('#loading').show();
            $.ajax({
                async: false,
                url: $(e.target).attr('href'),
                success: function (data) {
                    if ($('#share-modal')) {
                        $('#share-modal').html(data);
                        $('#share-modal').modal();
                        $('#share-modal').modal('hide', function () {
                            $('#share-modal').empty()
                        });
                        $('#share-modal').modal('setting', 'transition', "vertical flip");
                        $('#share-modal').modal('attach events', '.top-close-button', 'hide');
                        $('#share-modal').modal('show');
                        $('#loading').hide();
                    }
                }
            });
            return false;
        });
    });
</script>
