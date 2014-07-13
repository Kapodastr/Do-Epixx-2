<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';

	public $mode = 'html';

	
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();


	public function loadTemplate($template){

		$path = "protected/templates/".$template.".handlebars";

		if(!file_exists($path)){return false;};

		$content = file_get_contents($path);

		return $content;

	}

	public function render($template_name,$data=null,$return=false){

		//Yii::app()->CFile->set("protected/templates/".$template.".handlebars")

		$data['template_name'] = $template_name;
		$data['template_path'] = '/themes/epic';

		$data['codemirror_path'] = '/codemirror';		

		if ($this->mode == "html"){

			if($template = $this->loadTemplate($template_name)){

				echo Yii::app()->handlebars->render($template,$data);

			}else{
				echo "Cant load template from template folder";
			}

        }else{

        	$data['template'] = $template;
        	jsonapi::returnJson($data,200);

        }


	}	

	public function template2render($template_name){

		$template="";

		// получить коди из файла


		return $template;

	}












}