<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

return array(

	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',

	'name'=>'My Web Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.helpers.*',
		'application.extensions.*',	
			
	),


	'modules'=>array(
		// uncomment the following to enable the Gii tool


		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'qwerty',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('http://localhost:8888','::1'),
		),
	),

	// application components
	
	'components'=>array(

		 'CFile'=>array(

        	'class'=>'application.extensions.file.CFile',  
    	),

		 'handlebars' => [
            'class' => 'application.components.HandlebarsComponent',
        ],

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
        'urlManager'=>array(
            'urlFormat'=>'path',// включаем ЧПУ
            'cacheID' => false,
            'showScriptName'=>false, // убираем название скрипта из урл
            'rules'=>array(

            	'login'=>'users/login',
            	'logout'=>'users/logout',  

            	// добавить / удалить из группы, показать группу

            	'join/<studentid:\d+>/<groupid:\d+>/'=>'users/joingroup',  
            	'leave/<studentid:\d+>/<groupid:\d+>/'=>'users/leavegroup', 
            	'members/<groupid:\d+>'=>'users/members',
            	'group/<groupid:\d+>'=>'users/members',            	            	            	  
            	'classmates'=>'users/classmates', 

            	// задание проверено (для разных типов заданий)

            	'done/<taskid:\d+>/<userid:\d+>/<earned:\d+>/<checkedby:\d+>'=>'solutions/done',
            	'done/<taskid:\d+>/<userid:\d+>'=>'solutions/done',

				// получение задания из базы

            	'task/<taskid:\d+>'=>'tasks/single_by_id',
            	'task/<taskid:\w+>'=>'tasks/single_by_code',

            	'status/<taskid:\d+>/<userid:\d+>'=>'solutions/status',

            	'test'=>'tasks/preview',

            	'template/<template_name:\w+>'=>'template/get'

            	//'user/<taskid:\w+>'=>'tasks/single_by_code',            	

            	),
        ),
	 
		
		'db'=>array(
			'connectionString' => 'sqlite:protected/data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=userapi',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),

		'cache'=>array(
		'class'=>'system.caching.CDummyCache',
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);