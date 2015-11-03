<?php

class SmsgroupController extends Controller {

    public $defaultAction = "admin";
    public $pageTitle = "SMS Services";

    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('create', 'update', 'admin', 'view', 'delete', 'userInfo'),
                //'users' => array('@'),
                'expression' => 'SmsSupervisors::model()->isSupervisor()',
            ),
            array('deny',
                'message' => 'You are not authorized to access this service. Please contact ICT support if you want to use this service.',
                'users' => array('*'),
            ),
        );
    }

    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
            'dataProvider' => new CActiveDataProvider('SmsGroupMembers', array(
                'criteria' => array('condition' => 'group_id=' . $id),
                'pagination' => array(
                    'pageSize' => 100
                ),
                    ))
        ));
    }

    public function actionUserInfo($pin) {
        $hrdService = new HrdService;
        $data = $hrdService->getHrUser($pin);
        echo CJSON::encode($data[0]);
    }

    public function actionCreate() {
        $model = new SmsGroup;
        if ($model->department == "")
            $model->department = $this->bracUser['Project'];

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['SmsGroup'])) {
            $model->attributes = $_POST['SmsGroup'];
            $model->user_id = Yii::app()->user->id;
            $model->create_by = Yii::app()->user->id;
            $model->create_time = date("Y-m-d h:m:s");
            if ($model->save())
                $this->redirect(array('admin', 'id' => $model->id));
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
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['SmsGroup'])) {
            $model->attributes = $_POST['SmsGroup'];
            $model->user_id = Yii::app()->user->id;
            if ($model->save())
                $this->redirect(array('admin', 'id' => $model->id));
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

    public function actionAdmin() {
        if (SmsSupervisors::model()->isSpecialSupervisor()) {
            $dataProvider = new CActiveDataProvider('SmsGroup');
        } else {
            $dataProvider = new CActiveDataProvider('SmsGroup', array(
                'criteria' => array(
                'condition' => 'g.user_id=' . Yii::app()->user->id.' OR s.user_id= '. Yii::app()->user->id,
                'alias' => 'g',
                'join'=>'LEFT JOIN sms_group_share as s ON s.group_id=g.id',                
            )));
        }

        $this->render('admin', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function loadModel($id) {
        $model = SmsGroup::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'sms-group-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
