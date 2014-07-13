<?php
/* @var $this Admin_tasksController */
/* @var $model Tasks */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tasks-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'code'); ?>
		<?php echo $form->textArea($model,'code',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textArea($model,'title',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'theory'); ?>
		<?php echo $form->textArea($model,'theory',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'theory'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'example'); ?>
		<?php echo $form->textArea($model,'example',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'example'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'chapter'); ?>
		<?php echo $form->textField($model,'chapter'); ?>
		<?php echo $form->error($model,'chapter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hint'); ?>
		<?php echo $form->textArea($model,'hint',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'hint'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data'); ?>
		<?php echo $form->textArea($model,'data',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'data'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'points'); ?>
		<?php echo $form->textField($model,'points'); ?>
		<?php echo $form->error($model,'points'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'check'); ?>
		<?php echo $form->textArea($model,'check',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'check'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->