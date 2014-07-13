<?php

/**
* 
*/
 

/**
* 
*/
class jsonapi {


	function __construct($argument)
	{
		# code...
	}

	/**
	 * @return array готовит к транспортировке с помощью json наши данные 
	 */
	private function escapeJson($data){

		return $data;

	}
	
	static function returnJson($result,$status){

		$data['status']=$status;
		$data['result']=$result;

		//$data=array($data);
		//$data=array($data);		

		//$data = $this->escapeJson($data);

	    header('Content-type: application/javascript');	
		header('Access-Control-Allow-Origin: *');
 
	    echo CJSON::encode($data);

	    //echo 	'function callback({{"ip": "109.205.249.23"}});';

	    foreach (Yii::app()->log->routes as $route) {

	        if($route instanceof CWebLogRoute) {
	            $route->enabled = false; // disable any weblogroutes
	        }

	    }

	    Yii::app()->end();
	    exit();
	}

}
	

?>