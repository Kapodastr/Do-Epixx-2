<?php
/* @var $this Solutions_adminController */
/* @var $model Solutions */

$this->breadcrumbs=array(
	'Solutions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Solutions', 'url'=>array('index')),
	array('label'=>'Create Solutions', 'url'=>array('create')),
	array('label'=>'View Solutions', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Solutions', 'url'=>array('admin')),
);
?>

<h1>Update Solutions <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>