<?php

class SmsForm extends CFormModel {
    
    public $message;
    public $mask;
    public $groupId;
    public $department;
    
    public function rules() {
        return array(    
            array('message, mask, groupId', 'required'),
        );
    }
    public function attributeLabels() {
        return array(
            'message' => 'Message',
            'mask' => 'Masking',
            'groupId' => 'Group',
            'department' => 'Programme'
        );
    }
}
