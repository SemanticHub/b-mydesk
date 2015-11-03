<?php

class ExtsModule extends CWebModule {

    public $appModule = true;
    public $pro = false;
    public $name;
    public $description;
    public $image;
    public $status = array();
    public $vehicleType = array();

    public function init() {
        $this->setImport(array(
            'exts.models.*',
            'exts.components.*',
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
