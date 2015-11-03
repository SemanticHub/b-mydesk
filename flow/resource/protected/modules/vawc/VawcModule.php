<?php

class VawcModule extends CWebModule {

    public $appModule = true;
    public $pro = true;
    public $name;
    public $description;
    public $image;
    public $status = array();
    public $vehicleType = array();

    public function init() {
        $this->setImport(array(
            'vawc.models.*',
            'vawc.components.*',
        ));

        $this->defaultController = 'cases';
    }

    public function beforeControllerAction($controller, $action) {
        if (parent::beforeControllerAction($controller, $action)) {
            return true;
        } else
            return false;
    }
}
