<?php
/* @var $this Solutions_adminController */
/* @var $model Solutions */

$this->breadcrumbs=array(
	'Solutions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Solutions', 'url'=>array('index')),
	array('label'=>'Create Solutions', 'url'=>array('create')),
	array('label'=>'Update Solutions', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Solutions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Solutions', 'url'=>array('admin')),
);
?>

<h1>View Solutions #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'taskid',
		'userid',
		'timestarted',
		'timefinished',
		'status',
		'earned',
		'checkedby',
	),
)); ?>
