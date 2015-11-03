<?php

class DefaultController extends Controller {

    public function filters() {
        return array(
            'accessControl',
            'postOnly + delete',
        );
    }

    public $pageTitle = "BRAC Inn Service";
    
    public function actionIndex() {
        $this->render('index');
    }

}
