<?php

class ApiController extends Controller {

    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + create', // we only allow deletion via POST request
        );
    }

    function __construct() {
        Yii::app()->setComponents(array(
            'errorHandler' => array(
                'errorAction' => 'site/apierror'
            )
        ));
    }

    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('create'),
                'users' => array('*'),
            )
        );
    }

    public function actionCreate() {
        $SmsApp = $this->isValidRequest($_POST['app_name'], $_POST['app_url'], $_POST['app_token']);
        if ($SmsApp) {
            if ($_REQUEST['action'] == 'sms') {
                $this->createSms($SmsApp);
            } else if ($_REQUEST['action'] == 'group') {
                $this->createGroup($SmsApp);
            } else if ($_REQUEST['action'] == 'member') {
                $this->createMember($SmsApp);
            } else {
                throw new CHttpException(500, 'Forbidden');
            }
        }
    }

    public function actionUpdate() {
        
    }

    public function actionDelete() {
        
    }

    /*
     * 
     */

    private function createSms($SmsApp) {
        // get request data
        $model = new SendSms();
                
        $model->message = $_POST['message'];        
        $model->to_number = $_POST['to_number'];
        //single

        $app_name = $_POST['app_name'];
        $SmsApp = SmsApp::model()->find("app_name = '$app_name'");
        
        if ($model->to_number) {
            $out = new SmsOut();
            $out->message = $model->message;
            $out->message_type = '1'; // 1 for text, 2 for flash, 3 for unicode                                        
            $out->to_number = $model->to_number;
            $out->create_by = $SmsApp->user_id;
            $out->create_time = date("Y-m-d h:m:s");
            $out->priority = 1; // 1 for normal, 2 for high
            $out->status = 0; // 0 for elegble for sending 1 is for sent
            $out->mask = 'BRAC';
            $out->department = 'ICT';            
            $out->save();            
            // return responce
        }
        // group
        else if ($model->group_id) {
            //group is not empty
            // group is exists
            // group is created by user
            // fetch group members
            // send sms
        
        $groupMembers = SmsGroupMembers::model()->findAll('group_id=:group_id', array(':group_id' => $model->group_id));
        foreach ($groupMembers as $member => $attr) {
            $out = new SmsOut();
            $out->message = $model->message;
            $out->message_type = '1'; // 1 for text, 2 for flash, 3 for unicode                                                            
            $out->group_id = $model->group_id;
            //$out->create_by = Yii::app()->user->id;
            $out->create_by = $SmsApp->user_id;
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
        }
    }

    /*
     * app_name
     * app_url
     * app_token
     * name
     * description
     */

    private function createGroup($SmsApp) {
        $model = new SmsGroup;
        $this->loadApiData($_POST, $model);
        if ($_POST['name'] != "" && $_POST['description'] != "") {
            $model->user_id = $SmsApp->user_id;
            $model->create_by = $SmsApp->user_id;
            $model->create_time = date("Y-m-d h:m:s");
            if ($model->save()) {
                echo CJSON::encode($model);
            } else {
                throw new CHttpException(403, 'Failed to create Group');
            }
        } else {
            throw new CHttpException(403, sprintf('Group Name or Description cannot be empty'));
        }
    }

    private function createMember($SmsApp) {
        if (!empty($_POST['group_id']) && !empty($_POST['member_name']) && !empty($_POST['member_phone'])) {
            $smsGroup = SmsGroup::model()->find(array('condition' => 'id=:group_id and user_id=:uid', 'params' => array(':group_id' => $_POST['group_id'], ':uid' => $SmsApp->user_id)));
            if ($smsGroup) {
                $model = new SmsGroupMembers();
                $this->loadApiData($_POST, $model);
                $model->create_by = $SmsApp->user_id;
                $model->create_time = date("Y-m-d h:m:s");
                if ($model->save()) {
                    echo CJSON::encode($model);
                } else {
                    throw new CHttpException(403, 'Failed to add group member');
                }
            } else {
                throw new CHttpException(412, 'Group not exists or authorized');
            }
        } else {
            throw new CHttpException(412, 'Required parameter is missing');
        }
    }

    private function isValidRequest($app_name, $app_url, $app_token) {
        if ($app_name != "" && $app_url != "" && $app_token != "") {
            $SmsApp = SmsApp::model()->find(array('condition' => 'app_name=:app_name and app_url=:app_url and token=:app_token', 'params' => array(':app_name' => $app_name, ':app_url' => $app_url, ':app_token' => $app_token)));
            if ($SmsApp) {
                return $SmsApp;
            } else {
                throw new CHttpException(401, 'Application is not registered');
                return false;
            }
            return false;
        } else {
            throw new CHttpException(400, 'App name, App URL and App Token missmatch or empty.');
            return false;
        }
    }

    private function loadApiData($params, $model) {
        foreach ($params as $var => $value) {
            if ($model->hasAttribute($var)) {
                $model->$var = $value;
            } else {
                if ($var != 'app_name' && $var != 'app_url' && $var != 'app_token' && $var != 'action')
                    throw new CHttpException(412, 'Parameter ' . $var . ' is not allowed');
            }
        }
    }

    private function _sendResponse($status = 200, $body = '', $content_type = 'text/html') {
        // set the status
        $status_header = 'HTTP/1.1 ' . $status . ' ' . $this->_getStatusCodeMessage($status);
        header($status_header);
        // and the content type
        header('Content-type: ' . $content_type);

        // pages with body are easy
        if ($body != '') {
            // send the body
            echo $body;
        }
        // we need to create the body if none is passed
        else {
            // create some body messages
            $message = '';

            // this is purely optional, but makes the pages a little nicer to read
            // for your users.  Since you won't likely send a lot of different status codes,
            // this also shouldn't be too ponderous to maintain
            switch ($status) {
                case 401:
                    $message = 'You must be authorized to view this page.';
                    break;
                case 404:
                    $message = 'The requested URL ' . $_SERVER['REQUEST_URI'] . ' was not found.';
                    break;
                case 500:
                    $message = 'The server encountered an error processing your request.';
                    break;
                case 501:
                    $message = 'The requested method is not implemented.';
                    break;
            }

            // servers don't always have a signature turned on 
            // (this is an apache directive "ServerSignature On")
            $signature = ($_SERVER['SERVER_SIGNATURE'] == '') ? $_SERVER['SERVER_SOFTWARE'] . ' Server at ' . $_SERVER['SERVER_NAME'] . ' Port ' . $_SERVER['SERVER_PORT'] : $_SERVER['SERVER_SIGNATURE'];

            // this should be templated in a real-world solution
            $body = '
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>' . $status . ' ' . $this->_getStatusCodeMessage($status) . '</title>
</head>
<body>
    <h1>' . $this->_getStatusCodeMessage($status) . '</h1>
    <p>' . $message . '</p>
    <hr />
    <address>' . $signature . '</address>
</body>
</html>';

            echo $body;
        }
        Yii::app()->end();
    }

    private function _getStatusCodeMessage($status) {
        // these could be stored in a .ini file and loaded
        // via parse_ini_file()... however, this will suffice
        // for an example
        $codes = Array(
            200 => 'OK',
            400 => 'Bad Request',
            401 => 'Unauthorized',
            402 => 'Payment Required',
            403 => 'Forbidden',
            404 => 'Not Found',
            500 => 'Internal Server Error',
            501 => 'Not Implemented',
        );
        return (isset($codes[$status])) ? $codes[$status] : '';
    }

    private function _checkAuth() {
        // Check if we have the USERNAME and PASSWORD HTTP headers set?
        if (!(isset($_SERVER['HTTP_X_USERNAME']) and isset($_SERVER['HTTP_X_PASSWORD']))) {
            // Error: Unauthorized
            $this->_sendResponse(401);
        }
        $username = $_SERVER['HTTP_X_USERNAME'];
        $password = $_SERVER['HTTP_X_PASSWORD'];
        // Find the user
        $user = User::model()->find('LOWER(username)=?', array(strtolower($username)));
        if ($user === null) {
            // Error: Unauthorized
            $this->_sendResponse(401, 'Error: User Name is invalid');
        } else if (!$user->validatePassword($password)) {
            // Error: Unauthorized
            $this->_sendResponse(401, 'Error: User Password is invalid');
        }
    }

}
?>

