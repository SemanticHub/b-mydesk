<?php
$this->layout = "//layout/main";
?>
<i class="top-close-button close red icon" style="top: 1em; right: 1em"></i>
<div class="ui header" style="padding: 0.5rem 1rem; font-size: 1.4em">
    Add Member to Group
</div>
<div class="content" style="background: #eee; padding: 0.5em; padding-bottom: 0">
    <?php
    //$model->group_id = $_REQUEST['group_id'];
    $this->renderPartial('_form', array('model' => $model));
    ?>
</div>
<div class="actions" style="padding: 0.5rem">
    <div class="ui button close small green labeled icon" id="save">
        <i class="save circle icon"></i>
        Save
    </div>
    <div class="ui button close small red labeled icon">
        <i class="remove circle icon"></i>
        Close
    </div>
</div>

<script type="text/javascript">

    function phonenumber(inputtxt) {
        var phoneno = /^\(?([0-1]{2})\)?([0-9]{9})$/;
        
        if(inputtxt == "") {
            alert("Phone number is required.");
            return false;
        }
        if (!inputtxt.match(phoneno)) {
            alert("Invalid phone number.");
            return false;
        }
        return true;
    }

    $(function () {
        $('#save').on('click', function (e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            if (phonenumber($('#Members_phone').val())) {
                $.ajax({
                    url: "/vawc/members/create",
                    type: "POST",
                    data: $('#vawc-group-members-form').serializeArray(),
                    success: function (data) {
                        if (console)
                            console.log(data);
                        var data = $.parseJSON(data);
                        
                        if ($.isPlainObject(data)) {
                            alert(data['member_phone']);
                        } else {
                            $('.view.ui.modal').modal('hide');
                            jQuery('#vawc-group-members-grid').yiiGridView('update');
                        }
                    }
                });
            }
            return false;
        });

        $('#Members_pin').on('blur', function (e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            $.ajax({
                async: false,
                dataType: 'json',
                /*url: $(e.target).attr('href'),*/
                url: 'userinfo?pin=' + $(this).val(),
                success: function (data) {
                    $('#Members_name').val(data['Fname'] + ' ' + data['Mname'] + ' ' + data['Lname']);
                    $('#Members_phone').val(data['Mobile']);
                    $('#Members_email').val(data['Email']);
                    $('#Members_program').val(data['Project']);
                    $('#Members_designation').val(data['Designation']);
                }
            });
            return false;
        });

    });
</script>
