<?php

class SiteController extends Controller {
    /* public function actions()
      {
      return array(
      'captcha'=>array(
      'class'=>'CCaptchaAction',
      'backColor'=>0xFFFFFF,
      ),
      // page action renders "static" pages stored under 'protected/views/site/pages'
      // They can be accessed via: index.php?r=site/page&view=FileName
      'page'=>array(
      'class'=>'CViewAction',
      ),
      );
      } */

    public function filters() {
        return array(
            // 'rights',
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('page', 'error', 'apierror'),
                'users' => array('*'),
            ),
            array('allow',
                'actions' => array('index', 'indexNew'),
                'users' => array('@'),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }

    public function actionIndex() {
        $appModules = array();
        $data = Yii::app()->getModules();

        foreach ($data as $k => $v) {
            $appModule = Yii::app()->getModule($k);

            if (isset($appModule->appModule))
                array_push($appModules, $appModule);
        }
        $this->render('index', array('modules' => $appModules));
    }

    public function actionIndexNew() {
        $appModules = array();
        $data = Yii::app()->getModules();

        foreach ($data as $k => $v) {
            $appModule = Yii::app()->getModule($k);

            if (isset($appModule->appModule))
                array_push($appModules, $appModule);
        }
        $this->render('index-test', array('modules' => $appModules));
    }

    public function actionError() {
        $this->layout = '//layouts/public';
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }
    
    public function actionApierror() {
        $this->layout = '//layouts/api';
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('api-error', $error);
        }
    }
}
