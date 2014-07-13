<?php
/* @var $this Solutions_adminController */
/* @var $model Solutions */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'taskid'); ?>
		<?php echo $form->textField($model,'taskid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'userid'); ?>
		<?php echo $form->textField($model,'userid',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timestarted'); ?>
		<?php echo $form->textField($model,'timestarted'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timefinished'); ?>
		<?php echo $form->textField($model,'timefinished'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'earned'); ?>
		<?php echo $form->textField($model,'earned'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'checkedby'); ?>
		<?php echo $form->textField($model,'checkedby',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->