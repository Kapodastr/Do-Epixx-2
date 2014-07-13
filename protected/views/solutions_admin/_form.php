<?php
/* @var $this Solutions_adminController */
/* @var $model Solutions */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'solutions-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'taskid'); ?>
		<?php echo $form->textField($model,'taskid'); ?>
		<?php echo $form->error($model,'taskid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userid'); ?>
		<?php echo $form->textField($model,'userid',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'userid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'timestarted'); ?>
		<?php echo $form->textField($model,'timestarted'); ?>
		<?php echo $form->error($model,'timestarted'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'timefinished'); ?>
		<?php echo $form->textField($model,'timefinished'); ?>
		<?php echo $form->error($model,'timefinished'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'earned'); ?>
		<?php echo $form->textField($model,'earned'); ?>
		<?php echo $form->error($model,'earned'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'checkedby'); ?>
		<?php echo $form->textField($model,'checkedby',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'checkedby'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->