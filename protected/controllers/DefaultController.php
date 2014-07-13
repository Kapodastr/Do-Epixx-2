<?php

class DefaultController extends CController
{
    public function actionIndex()
    {
        echo Yii::app()->handlebars->render('Planets:<br />{{#each planets}}<h6>{{this}}</h6>{{/each}}', [
            'planets' => [
                'Mercury',
                'Venus',
                'Earth',
                'Mars'
            ],
        ]);
    }
}