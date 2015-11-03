<?php

class SmsgroupmemberController extends Controller {

    public $defaultAction = "admin";
    public $pageTitle = "SMS Services";

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
//            array('allow', // allow all users to perform 'index' and 'view' actions
//                'actions' => array('index', 'view'),
//                'users' => array('*'),
//            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'admin', 'delete', 'view', 'userInfo'),
                'users' => array('@'),
            ),
//            array('allow', // allow admin user to perform 'admin' and 'delete' actions
//                'actions' => array('admin', 'delete'),
//                'users' => array('admin'),
//            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    public function actionUserInfo($pin) {
        $hrdService = new HrdService;
        $data = $hrdService->getHrUser($pin);
        echo CJSON::encode($data[0]);
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new SmsGroupMembers;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['SmsGroupMembers'])) {
            $model->attributes = $_POST['SmsGroupMembers'];

            $count = SmsGroupMembers::model()->count("member_phone=:mp and group_id=:gid", array(":mp" => $model->member_phone, ':gid' => $model->group_id));
            
            if ($count > 0) {
                $model->addError('member_phone', $model->member_phone." already exists in this group.");
                echo CJSON::encode($model->errors);
                Yii::app()->end();
            }

            if ($model->save())
                return "ok";
            else
                echo CJSON::encode($model->errors);
            Yii::app()->end();
            //$this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id, $gid) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['SmsGroupMembers'])) {
            $model->attributes = $_POST['SmsGroupMembers'];
            if ($model->save())
                //$this->redirect(array('view', 'id' => $model->id));
                $this->redirect(array('smsgroup/view', 'id' => $gid));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
//    public function actionIndex() {
//        $dataProvider = new CActiveDataProvider('SmsGroupMembers');
//        $this->render('index', array(
//            'dataProvider' => $dataProvider,
//        ));
//    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
//        $model = new SmsGroupMembers('search');
//        $model->unsetAttributes();  // clear any default values
//        if (isset($_GET['SmsGroupMembers']))
//            $model->attributes = $_GET['SmsGroupMembers'];
        $dataProvider = new CActiveDataProvider('SmsGroupMembers');
        $this->render('admin', array(
            'dataProvider' => $dataProvider,
        ));

//        $this->render('admin', array(
//            'model' => $model,
//        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return SmsGroupMembers the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = SmsGroupMembers::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param SmsGroupMembers $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'sms-group-members-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
