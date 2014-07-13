<?php

class SolutionsController extends Controller{

	function init() {
	    //$this->updateCache();
	    Yii::app()->cache->flush();  
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

	public function actionStatus ($taskid,$userid){

		$solution = Solutions::model()->findByAttributes(array('taskid' => $taskid, 'userid' => $userid));

		if($solution){jsonapi::returnJson($solution->status,200);}else{

			jsonapi::returnJson(null,404);
			
		}

	}

	public function actionDone($taskid,$userid,$earned=0,$checkedby=0){

		// сперва получим информацию о таске (если она нам нужна, конечно) 
		// $task = Tasks::findByPk($taskid);
		// если запись найдена

		$solution = Solutions::model()->findByAttributes(array('taskid' => $taskid, 'userid' => $userid));

		if($solution){

			// запись уже существует

		}else{

			$solution = new Solutions;
			$solution->taskid=$taskid;
			$solution->userid=$userid;					

		}

		$solution->earned=$earned;
		$solution->checkedby=$checkedby;
		$solution->timefinished=time();
		$solution->status="done";

		if($solution->save()){$status=200;}else{$status=500;}	

		// Solutions::model()->findByPk($id);

		jsonapi::returnJson($solution,$status);

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