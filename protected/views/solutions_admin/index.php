<?php
/* @var $this Solutions_adminController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Solutions',
);

$this->menu=array(
	array('label'=>'Create Solutions', 'url'=>array('create')),
	array('label'=>'Manage Solutions', 'url'=>array('admin')),
);
?>

<h1>Solutions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
