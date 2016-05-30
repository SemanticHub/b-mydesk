<?php

class HolidayController extends Controller {

    public $defaultAction = 'admin';
    public $pageTitle = "BRAC Inn Service";

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('admin', 'create', 'update', 'index'),
                'users' => array('@'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    public function actionCreate() {
        $model = new Holiday;

        if (isset($_POST['Holiday'])) {
            $model->attributes = $_POST['Holiday'];
            $year = explode("-", $model->holiday);
            $model->year = $year[0];
            if ($model->save())
                $this->redirect(array('admin', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Holiday'])) {
            $model->attributes = $_POST['Holiday'];
            if ($model->save())
                $this->redirect(array('admin', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    public function actionIndex() {
        $zone = new DateTimeZone("Asia/Dhaka");
        $serverDateTime = new DateTime("now", $zone);
        $year = $serverDateTime->format('Y');
        echo CJSON::encode(Holiday::model()->findAll('year = :y and DATE(holiday)> DATE(now())', array(':y'=>$year)));
    }

    public function actionAdmin() {
        $model = new Holiday('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Holiday']))
            $model->attributes = $_GET['Holiday'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    public function loadModel($id) {
        $model = Holiday::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'holiday-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
