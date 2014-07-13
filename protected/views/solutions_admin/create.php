<?php
/* @var $this Solutions_adminController */
/* @var $model Solutions */

$this->breadcrumbs=array(
	'Solutions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Solutions', 'url'=>array('index')),
	array('label'=>'Manage Solutions', 'url'=>array('admin')),
);
?>

<h1>Create Solutions</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>