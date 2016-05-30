<div class="form">
    <div class="ui info message">Fields with <span class="required">*</span> are required.</div>
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'cash-form',
        'htmlOptions' => array('class' => 'ui form'),
            //'enableAjaxValidation' => false,
    ));
    ?>
    <?php echo $form->errorSummary($model, '', '', array('class' => 'ui error message', 'style' => 'display:block; border: 1px solid; margin-top:0')); ?>


    <div class="field">
        <?php echo $form->labelEx($model, 'to_pin'); ?>
        <?php echo $form->textField($model, 'to_pin', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'to_pin'); ?>
    </div>

    <div class="field">
        <?php echo $form->labelEx($model, 'amount'); ?>
        <?php echo $form->textField($model, 'amount', array('size' => 6, 'maxlength' => 6)); ?>
        <?php echo $form->error($model, 'amount'); ?>
    </div>

    <!--	<div class="field">
    <?php echo $form->labelEx($model, 'create_by'); ?>
    <?php echo $form->textField($model, 'create_by'); ?>
    <?php echo $form->error($model, 'create_by'); ?>
            </div>
    
            <div class="field">
    <?php echo $form->labelEx($model, 'create_time'); ?>
    <?php echo $form->textField($model, 'create_time'); ?>
    <?php echo $form->error($model, 'create_time'); ?>
            </div>-->



    <div class="field">
        <?php echo $form->labelEx($model, 'initial'); ?>
        <?php echo $form->textField($model, 'initial', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'initial'); ?>
    </div>

    <div class="field buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'ui small teal button')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div>
<script type="text/javascript">
    $(function () {
        $('#Cash_to_pin').on('blur', function (e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            $.ajax({
                async: false,
                dataType: 'json',
                url: 'userinfo?pin=' + $(this).val(),
                success: function (data) {
                    $('#Cash_initial').val(data['Fname'] + ' ' + data['Mname'] + ' ' + data['Lname']);
                }
            });
            return false;
        });

    });
</script>