<?php

class SmsoutController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
        public $defaultAction='admin';
	public $layout='//layouts/column2';
        public $pageTitle = "SMS Services";

	/**
	 * @return array action filters
	 */
	public function filters()
	{
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
	public function accessRules()
	{
		return array(
//			array('allow',  // allow all users to perform 'index' and 'view' actions
//				'actions'=>array('index','view'),
//				'users'=>array('*'),
//			),
//			array('allow', // allow authenticated user to perform 'create' and 'update' actions
//				'actions'=>array('create','update'),
//				'users'=>array('@'),
//			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','update','index'),
				'expression' => 'SmsSupervisors::model()->isSpecialSupervisor()',
			),
                        array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('report','reportDetails'),
				'expression' => 'SmsSupervisors::model()->isReportSupervisor()',
                                //'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new SmsOut;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['SmsOut']))
		{
			$model->attributes=$_POST['SmsOut'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['SmsOut']))
		{
			$model->attributes=$_POST['SmsOut'];
			if($model->save())
				$this->redirect(array('admin','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('SmsOut');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new SmsOut('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['SmsOut']))
			$model->attributes=$_GET['SmsOut'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
        
        	/**
	 * Manages all models.
	 */
	public function actionReportDetails()
	{
		$model=new SmsOut('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['SmsOut']))
			$model->attributes=$_GET['SmsOut'];

		$this->render('reportDetails',array(
			'model'=>$model,
		));
	}
        
        public function actionReport()
	{
		//$model=new SmsOut();
                
		//$model->unsetAttributes();  // clear any default values
                
//                 $tasks = SmsOut::model()->findAll(array(                     
//                     'select'=> 'count(*) AS cnt, group_id,create_time',
//                    'condition' =>'status=:status',
//                    'group' => 'create_time,group_id',
//                    'params' => array(':status' => '1'),
//                ));           
                 
                 $sql = "SELECT COUNT(*) as sms_count, group_id,app_id,create_time FROM sms_out group by group_id,MONTH(create_time),app_id order by MONTH(create_time) desc";
                 
                 $tasks = Yii::app()->db->createCommand($sql)->queryAll();
                 
                 $sqlByDept = "SELECT COUNT(*) as sms_count, department,app_id,create_time FROM sms_out group by department,MONTH(create_time),app_id order by MONTH(create_time) desc";
                 
                 $tasksByDept = Yii::app()->db->createCommand($sqlByDept)->queryAll();
                 
                
                 
		//if(isset($_GET['SmsOut']))
	//		$model->attributes=$_GET['SmsOut'];

		$this->render('report',array(
			'tasks'=>$tasks,
                        'tasksByDept' => $tasksByDept,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return SmsOut the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=SmsOut::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param SmsOut $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='sms-out-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
