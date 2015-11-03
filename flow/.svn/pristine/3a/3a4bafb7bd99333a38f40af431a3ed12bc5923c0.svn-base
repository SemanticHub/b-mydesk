<style type="text/css">
    .originalTextareaInfo {
        font-weight: bold
    }
    .warningTextareaInfo {
        font-weight: bold; color: red
    }
</style>
<?php
$this->layout = "//layouts/column2_sms";
$this->renderPartial('_menu', array('active' => 'sms'));
?>
<h3 class="ui header dividing" style="margin-top: 0">Send SMS</h3>
<?php $this->renderPartial('_form', array('model' => $model, 'groups' => $groups, 'clis' => $clis)); ?>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/custom/javascript/jcounter/jquery.textareaCounter.plugin.js"></script>

<script type="text/javascript">
    var options = {
        'maxCharacterSize': 160,
        'originalStyle': 'originalTextareaInfo',
        'warningStyle': 'warningTextareaInfo',
        'warningNumber': 40,
    };
    $('#SmsForm_message').textareaCount(options);
</script>