<?php

class DefaultController extends Controller {

    public function filters() {
        return array(
            'accessControl',
            'postOnly + delete',
        );
    }

    public $pageTitle = "SMS Services";

    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('index'),
                'expression' => 'SmsSupervisors::model()->isSupervisor()',
            ),
            array('deny',
                'message' => 'You are not authorized to access this service. Please contact ICT support if you want to use this service.',
                'users' => array('*'),
            ),
        );
    }

    public $clis = array(
        'BRAC' => 'BRAC',
        'SIR FH ABED' => 'SIR FH ABED',
        'BRAC ICT' => 'BRAC ICT',
        'BRAC HNPP' => 'BRAC HNPP',
        'BRAC SCC' => 'BRAC SCC',
        'BRAC FLEET' => 'BRAC FLEET'
    );

    public function actionIndex() {
        /*
          var_dump($_SERVER['REMOTE_HOST']);
          var_dump($_SERVER['REMOTE_ADDR']);
          YiiBase::setPathOfAlias('cmp','/var/www/html/trunk/resource/protected/extensions/EHttpClient/');
          Yii::import('cmp.*');
          $client = new EHttpClient('https://cmp.grameenphone.com/gpcmpapi/messageplatform/controller.home', array(
          'maxredirects' => 0,
          'timeout' => 30));

          $client->setParameterGet(array(
          'username' => 'BRACADMIN',
          'password' => 'Br2c1ct@dmin',
          'apicode' => '1',
          'msisdn' => '01719197617',
          'countrycode' => '880',
          'cli' => 'BRAC',
          'messagetype' => '1',
          'message' => 'Test',
          'messageid' => '0',
          ));

          $response = $client->request();
          if ($response->isSuccessful())
          echo '<pre>' . htmlentities($response->getBody()) . '</pre>';
          else
          echo $response->getRawBody();
         */

        $model = new SmsForm;


        $groups = SmsGroup::model()->findAll('user_id=:uid', array(':uid' => Yii::app()->user->id));
        $listGroups = CHtml::listData($groups, 'id', 'name');



        $criteria = new CDbCriteria;
        $criteria->select = 'g.id,g.name';
        $criteria->condition = 's.user_id=:uid';
        $criteria->params = array(':uid' => Yii::app()->user->id);
        $criteria->join = 'LEFT JOIN sms_group_share as s ON s.group_id=g.id';
        $criteria->alias = 'g';

        $sharedGroups = SmsGroup::model()->findAll($criteria);
        
        //CVarDumper::dump($sharedGroups);
        $listSharedGroups = CHtml::listData($sharedGroups, 'id', 'name');

        $optionList = array(
            'User Group' => $listGroups,
            'Shared Group' => $listSharedGroups
        );



        if (isset($_POST['SmsForm'])) {
            $model->attributes = $_POST['SmsForm'];
            $groupMembers = SmsGroupMembers::model()->findAll('group_id=:group_id', array(':group_id' => $model->groupId));

            if ($model->validate()) {

                $successCount = 0;
                $errorCount = 0;

                foreach ($groupMembers as $member => $attr) {
                    $out = new SmsOut();
                    $out->group_id = $model->groupId;
                    $out->message = $model->message;
                    $out->message_type = '1'; // 1 for text, 2 for flash, 3 for unicode
                    $out->department = SmsSupervisors::model()->getDepartment();
                    $out->mask = $model->mask;
                    $out->to_number = $attr->member_phone;
                    $out->create_by = Yii::app()->user->id;
                    $out->create_time = date("Y-m-d h:m:s");
                    $out->priority = 1; // 1 for normal, 2 for high
                    $out->status = 0; // 0 for elegble for sending 1 is for sent
                    $out->save();
                    if ($out->save()) {
                        $successCount++;
                    } else {
                        $errorCount++;
                    }
                }

                if ($successCount > 0) {
                    Yii::app()->user->setFlash('green', 'SMS sent request submitted successfully. It might take some time to deliver all messages');
                } else {
                    Yii::app()->user->setFlash('error', 'An error occured while submitting SMS request. Contact ICT support.');
                }
                $this->redirect('/sms');
            }
        }
        $this->render('index', array('model' => $model, 'groups' => $optionList, 'clis' => $this->clis));
    }

}
