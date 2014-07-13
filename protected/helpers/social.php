<?php

/**
* 
*/
 
function __construct($argument){
	# code...
}

/**
* 
*/
class social {

	/* Получает подробный список студентов из определенной группы*/

	static function studentsFromGroup($groupid){

		$find['type1']="student";	
		$find['type2']="group";		
		$find['id2']=$groupid;
		
		$members = Relation::model()->findAllByAttributes($find);

		foreach($members as $member){ $student_ids[]=$member['id1']; }

		$students_detailed = Students::model()->findAllByPk($student_ids);

		return $students_detailed;
	}


	static function curatorFromGroup($groupid){

		$find['type1']="curator";	
		$find['type2']="group";		
		$find['id2']=$groupid;
		
		$curator = Relation::model()->findAllByAttributes($find);

		$curator_id = $curator->id1;

		return $curator_id;
	}






}