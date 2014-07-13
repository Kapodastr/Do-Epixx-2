<?php
/* @var $this Admin_tasksController */
/* @var $data Tasks */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<?php echo CHtml::encode($data->code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('theory')); ?>:</b>
	<?php echo CHtml::encode($data->theory); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('example')); ?>:</b>
	<?php echo CHtml::encode($data->example); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chapter')); ?>:</b>
	<?php echo CHtml::encode($data->chapter); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('hint')); ?>:</b>
	<?php echo CHtml::encode($data->hint); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('points')); ?>:</b>
	<?php echo CHtml::encode($data->points); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('check')); ?>:</b>
	<?php echo CHtml::encode($data->check); ?>
	<br />

	*/ ?>

</div>