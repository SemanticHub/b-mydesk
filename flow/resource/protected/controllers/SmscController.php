<?php

/**
 * Description of SmsOut
 *
 * @author 154163 | Syed Ekramuddin Emon | syed.ekramuddin@brac.net | ekram.syed@gmail.com
 */
class SmscController extends Controller {

    

    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('create'),
                'users' => array('*'),
            ),
        );
    }

    public function actionCreate() {
        $token = $_REQUEST['token'];
        $app_url = $_REQUEST['app_url'];
        
        
        
        if(isset($token) && isset($app_url))
        {
        Yii::import("application.modules.sms.models.SmsApp");
        $sms_app = SmsApp::model()->findAll('token=:token', array(':token' => $token));
        
        if($sms_app[0]->app_url == $app_url)
        {                                    
            
        $uid = $sms_app[0]->user_id;
        
        $to_number = $_REQUEST['to_number'];
        $gourp_id = $_REQUEST['group_id'];
        
               
        $out = new SmsOut();
        
        
        if($gourp_id)
            $out->group_id = $group_id;
        $out->app_id = $sms_app[0]->id;
        $out->message = $_REQUEST['message'];
        $out->message_type = '1'; // 1 for text, 2 for flash, 3 for unicode
        $out->department = $sms_app[0]->department;
        $out->mask = $sms_app[0]->app_cli;
        $out->to_number = $to_number;
        $out->create_by = $uid;
        $out->create_time = date("Y-m-d h:m:s");
        $out->priority = 1; // 1 for normal, 2 for high
        $out->status =0; // 0 for elegble for sending 1 is for sent
        
        if(!$out->save()) print_r($out->getErrors());            
        }
        }
        else
        {
            echo "Token or app url missing";
        }
    }

}
