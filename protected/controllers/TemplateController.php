<?php

class TemplateController extends Controller
{
    public function actionGet($template_name){

        if(!isset($template_name) OR $template_name==""){ return false; }

        if($template = $this->loadTemplate($template_name)){

            echo $template;

        }else{

            echo "ошибка, шаблон $template_name не загружен";

        }

    }
}