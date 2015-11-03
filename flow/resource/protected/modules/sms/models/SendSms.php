<?php
// Model for Api only
class SendSms extends CFormModel {
    
    public $message;
//    public $mask;
    public $to_number;
    public $group_id;
    //public $application;
    
    public function rules() {
        return array(    
            array('message', 'required'),
        );
    }
    
}


