<?php


class TasksController extends Controller{


	function init() {
    //$this->updateCache();
    Yii::app()->cache->flush(); 

    //Yii::setPathOfAlias('Handlebars',Yii::getPathOfAlias('application.extensions.Handlebars'));
    //Yii::setPathOfAlias('Handlebars\Loader',Yii::getPathOfAlias('application.extensions.Handlebars'));     
	}

	public function actionPreview(){

		$this->render("user_list");

	}
	 
	private function updateCache() {
	    if(Yii::app()->request->getParam('cache', 'true') === 'false')
	        Yii::app()->setComponent('cache', new CDummyCache());
	}

	public function actions(){


		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
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

	}





	public function actionIndex()
	{
		$this->render('index');
	}


	public function actionSingle($taskid=1){

		$task = Tasks::model()->findByPk($taskid);

		jsonapi::returnJson($task);

	}

	public function actionSingle_by_id($taskid=1){

		$task = Tasks::model()->findByPk($taskid);

		// проверяем, что получилось

		if($task){ $status=200; }else{ $status=404; }

		// возвращаем данные 

		$this->render("task_single",$task);

	}

	public function actionSingle_by_code($taskid=1){

		$task = Tasks::model()->findByAttributes(array('code' => $taskid));

		if($task){$status=200;}else{$status=404;}

		jsonapi::returnJson($task,$status);

	}

	public function actionNext_by_id($currentid){

		$current = Tasks::model()->findByPk($taskid);

		$chapter = $current['chapter'];

		$task = Tasks::model()->findByAttributes(array('code' => $taskid));
		
	}

	public function actionNext_by_code($currentcode){

		$task = Tasks::model()->findByPk($taskid);

		$this->actionNext_by_id($task['id']);

	}





	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}