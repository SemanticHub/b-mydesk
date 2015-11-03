<?php

class CallingController extends Controller {

    public function filters() {
        return array(
            'accessControl',
            'postOnly + delete',
        );
    }

    public $pageTitle = "VAWC Services";

    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('index'),
                'users' => array('*')
                //'expression' => 'SmsSupervisors::model()->isSupervisor()',
            ),
//            array('deny',
//                'message' => 'You are not authorized to access this service. Please contact ICT support if you want to use this service.',
//                'users' => array('*'),
//            ),
        );
    }

    public function actionIndex() {
        CVarDumper::dump($_POST, 10, true);
        CVarDumper::dump($_GET, 10, true);
        
        $model=new Cases;
        
    }
}
