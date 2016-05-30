<?php

class CashController extends Controller {

    public $defaultAction = 'admin';
    public $pageTitle = "BRAC Inn Service";

    public function filters() {
        return array(
            'accessControl',
            'postOnly + delete',
        );
    }

    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('create', 'admin', 'view' ,'userInfo', 'print'),
                'users' => array('@'),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }

    public function actionPrint() {
        $model = new Cash;
        $zone = new DateTimeZone("Asia/Dhaka");
        $serverDateTime = new DateTime("now", $zone);

        if (isset($_POST['Cash'])) {
            $model->attributes = $_POST['Cash'];
            $model->to_pin = Yii::app()->user->name;
            $model->create_by = Yii::app()->user->id;
            $tokenDate = $model->create_time;
            $model->create_time = $serverDateTime->format('Y-m-d H:i:s');
            
            if (Supervisor::model()->isSupervisor()) {
                if ($model->save()) {

//                    CVarDumper::dump($model, 10, true);
//                    Yii::app()->end();
//                    $ua = UserAccount::model()->find(array('condition' => 'pin = :p', 'params' => array(':p' => $model->to_pin)));
//                    if ($ua) {
//                        $ua->balance = $ua->balance + $model->amount;
//                        $ua->save();
//                    } else {
//                        $ua = new UserAccount;
//                        $ua->pin = $model->to_pin;
//                        $ua->balance = $model->amount;
//                        $ua->save();
//                    }

                    $tokenToPrint = floor($model->amount / 45);
                    $tokens = array();

                    for ($i = 0; $i < $tokenToPrint; $i++) {
                        $t = new Transaction();
                        $t->pin = Yii::app()->user->name;
                        $t->date_time = $tokenDate . " " . date("H:i:s");
                        $t->count = 1;
                        $t->status = 1;
                        $t->sender = "CASH-TO-TOKEN";
                        if($t->save()) {
                            array_push($tokens, $t->id);
                        }                        
                    }

                    $this->redirect(array('view', 'tokens' => implode(",", $tokens)));
                } else {
                    $model->addError('create_by', "There is an error saving the transaction.");
                }
            } else {
                $model->addError('create_by', "You don't have access to add Cash transactions.");
            }
        } else {
            $this->render('print', array('model' => $model));
        }
    }

    public function actionView() {
        $this->render('view', array('model' => $model, 'tokens' => $tokens));
    }

    public function actionCreate() {

        $model = new Cash;

        $zone = new DateTimeZone("Asia/Dhaka");
        $serverDateTime = new DateTime("now", $zone);

        if (isset($_POST['Cash'])) {
            $model->attributes = $_POST['Cash'];
            $model->create_by = Yii::app()->user->id;
            $model->create_time = $serverDateTime->format('Y-m-d H:i:s');
            if (Supervisor::model()->isSupervisor()) {
                if ($model->save()) {
                    $ua = UserAccount::model()->find(array('condition' => 'pin = :p', 'params' => array(':p' => $model->to_pin)));
                    if ($ua) {
                        $ua->balance = $ua->balance + $model->amount;
                        $ua->save();
                    } else {
                        $ua = new UserAccount;
                        $ua->pin = $model->to_pin;
                        $ua->balance = $model->amount;
                        $ua->save();
                    }
                    $this->redirect(array('admin', 'id' => $model->id));
                } else {
                    $model->addError('create_by', "There is an error saving the transaction.");
                }
            } else {
                $model->addError('create_by', "You don't have access to add Cash transactions.");
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Cash'])) {
            $model->attributes = $_POST['Cash'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionUserInfo($pin) {
        $hrdService = new HrdService;
        $data = $hrdService->getHrUser($pin);
        echo CJSON::encode($data[0]);
    }

    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    public function actionAdmin() {

//        $date_name = $_POST['date_name'];        
//        if (!$date_name)
//            $date_name = date('Y-m-d');        
//        
//        $model = new Cash;
//        $model->search($date_name);
//                
//        $model->unsetAttributes();  // clear any default values
//        if (isset($_GET['Cash']))
//            $model->attributes = $_GET['Cash'];
//
//        $this->render('admin', array(
//            'model' => $model,
//        ));

        $date_name = $_REQUEST['date_name'];
        if (!$date_name)
            $date_name = date('Y-m-d');

        $criteria = new CDbCriteria;
        $criteria->select = 't.*';
        $criteria->condition = 'DATE(t.create_time)=:dt';
        $criteria->params = array(
            ':dt' => $date_name
        );
        $dataProvider = new CActiveDataProvider('Cash', array(
            'criteria' => $criteria,
            'pagination' => false
        ));

        $sql = "SELECT sum(amount) as dailyTotal FROM inn_cash where DATE(create_time) = '$date_name'";
        $totalCash = Yii::app()->db->createCommand($sql)->queryAll();

        $this->render('admin', array(
            'dataProvider' => $dataProvider,
            'totalCash' => $totalCash,
            'date_name' => $date_name
        ));
    }

    public function loadModel($id) {
        $model = Cash::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'cash-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
