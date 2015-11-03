<?php
$this->layout = "//layout/main";
?>
<i class="top-close-button close red icon" style="top: 1em; right: 1em"></i>
<div class="ui header" style="padding: 1rem">
    Case Details # <?php echo $model->id; ?>
</div>
<div class="content" style="background: #eee; padding: 0.5em">
    <?php
    $this->widget('zii.widgets.CDetailView', array(
        'data' => $model,
        'attributes' => array(
            'id',
            'case_summary',
            'case_details',
            'caller_name',
            'caller_mobile',
            'caller_address',
            'voice_path',
            //'datetime',
            array(
                'name' => 'datetime',
                'value' => Yii::app()->dateFormatter->format("d MMM, y h:mm a", $model->datetime)
            ),
            'priority',
            //'created_by',
            array(
                'name' => 'created_by',
                'value' => User::model()->findByPk($model->created_by)->username
            ),
            //'created_time',
            array(
                'name' => 'created_time',
                'value' => Yii::app()->dateFormatter->format("d MMM, y h:mm a", $model->created_time)
            ),
            'updated_by',
            //'updated_time',
            array(
                'name' => 'updated_time',
                'value' => Yii::app()->dateFormatter->format("d MMM, y h:mm a", $model->updated_time)
            ),
            'status',
        ),
    ));
    ?>
</div>
<div class="actions" style="padding: 0.5rem">
    <div class="ui button close small red labeled icon">
        <i class="remove circle icon"></i>
        Close
    </div>
</div>
