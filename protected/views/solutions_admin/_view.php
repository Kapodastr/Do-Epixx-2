<?php
/* @var $this Solutions_adminController */
/* @var $data Solutions */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('taskid')); ?>:</b>
	<?php echo CHtml::encode($data->taskid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userid')); ?>:</b>
	<?php echo CHtml::encode($data->userid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timestarted')); ?>:</b>
	<?php echo CHtml::encode($data->timestarted); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timefinished')); ?>:</b>
	<?php echo CHtml::encode($data->timefinished); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('earned')); ?>:</b>
	<?php echo CHtml::encode($data->earned); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('checkedby')); ?>:</b>
	<?php echo CHtml::encode($data->checkedby); ?>
	<br />

	*/ ?>

</div>