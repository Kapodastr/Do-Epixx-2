<?php

class UsersController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionLogin(){


		jsonapi::returnJson("login");


	}

	public function actionLogout(){


		jsonapi::returnJson("logout");


	}

	public function actionExist($userid){
		
		jsonapi::returnJson("logout");

	}
	/*
	*  присоединяет пользователя к группе 
	*/
	public function actionJoingroup($studentid,$groupid){

		// Добавляем зависимость

		$relation = new Relation();

		$relation->type1 = "student";
		$relation->id1 = $studentid;
		$relation->relation = "in";	
		$relation->type2 = "group";			
		$relation->id2 = $groupid;

		$relation->inline = $this->inlineme($relation);	

		if(!$this->isUnique($relation)){ jsonapi::returnJson($relation,409);}

		if($relation->save()){jsonapi::returnJson($relation,200);}else{jsonapi::returnJson(null,500);}	

	}

	public function actionLeavegroup($studentid,$groupid){ 

		$inline = "student".$studentid."in"."group".$groupid;

		//echo $inline;

		$criteria = new CDbCriteria;
		$criteria->addInCondition("inline",array($inline));

		if(Relation::model()->deleteAll($criteria)){

			jsonapi::returnJson(null,200);

		} else{

			jsonapi::returnJson(null,500);

		}

	}

	public function actionMembers($groupid){

		$students = social::studentsFromGroup($groupid);

		jsonapi::returnJson($students,200);

	}

	public function actionCurator($groupid){

		// возвращает куратора с детальной информацией 

		$curator = social::curatorFromGroup($groupid);
		
	}



	

	/*
	*  выводит пользователя из группы 
	*/
 


	// 
	// 
	// 
	// 	 Служебные функции
	// 
	// 
	// 



	private function isUnique($relation){

		// провряет,нет ли уже такой же существующей записи:

		$inline = $this->inlineme($relation);

		if(count(Relation::model()->findByAttributes(array('inline' => $inline)))){ 
			return false; 
		}else{
			return true;
		}
		
	}

	private function inlineme($relation){

		// для обеспечения уникальности данных в таблице будем генерировать хеш-строку, просто склеивая элементы

		return $relation->type1.$relation->id1.$relation->relation.$relation->type2.$relation->id2;

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