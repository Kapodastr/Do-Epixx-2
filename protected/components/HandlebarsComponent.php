<?php

class HandlebarsComponent extends CApplicationComponent
{
    private static $_engine;

    public function render($name, $params = [])
    {
        if (!self::$_engine) {
            require Yii::getPathOfAlias('application.vendor.Handlebars') . '/Autoloader.php';
            spl_autoload_unregister(['YiiBase', 'autoload']);
            Handlebars_Autoloader::register();
            spl_autoload_register(['YiiBase', 'autoload']);

            self::$_engine = new Handlebars_Engine();
        }

        return self::$_engine->render($name, $params);
    }
}