<?php

/**
 * Description of SmsOut
 *
 * @author 154163 | Syed Ekramuddin Emon | syed.ekramuddin@brac.net | ekram.syed@gmail.com
 */
class SmsoutCommand extends CConsoleCommand {

    public function run($args) {
        //$tasks = SmsOut::model()->findAll('status=:status', array(':status' => '0'));
        $tasks = SmsOut::model()->findAll(array(
            'condition' => 'status=:status AND read_sms=:read_sms',
            'limit' => 5,
            'params' => array(':status' => 0,'read_sms' => 0),
        ));
        
        foreach ($tasks as $data => $task) {
            $task->read_sms = 1;
            $task->update();
        }

        $client = new EHttpClient(
            'https://cmp.grameenphone.com/gpcmpapi/messageplatform/controller.home', array(
            'maxredirects' => 0,
            'timeout' => 10
                )
        );

        foreach ($tasks as $data => $task) {
            $client->setParameterGet(array(
                'username' => 'BRACADMIN',
                'password' => 'BRACadmin@123',
                'apicode' => '1',
                'msisdn' => $task->to_number,
                'countrycode' => '880',
                'cli' => $task->mask,
                'messagetype' => $task->message_type,
                'message' => $task->message,
                'messageid' => $task->id,
            ));

            $response = $client->request();

            $task->responce_code = $response->getBody();

            $response = explode(",", $task->responce_code);
            if ($response[0] == '200') {
                
                $task->status += 1;
                
            } else {
                
                if ($task->fail_count > 2) {                    
                    $task->status += 1;                
                } else {
                    $task->status = 0;
                    $task->fail_count = $task->fail_count + 1;
                }
            }
            $task->update();
        }
    }

}
