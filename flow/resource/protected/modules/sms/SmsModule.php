<?php

class SmsModule extends CWebModule {

    public $appModule = true;
    public $pro = true;
    public $name;
    public $description;
    public $image;
    public $status = array();
    public $vehicleType = array();

    public function init() {
        $this->setImport(array(
            'sms.models.*',
            'sms.components.*',
        ));

        $this->defaultController = 'default';
    }

    public function beforeControllerAction($controller, $action) {
        if (parent::beforeControllerAction($controller, $action)) {
            return true;
        } else
            return false;
    }
}
