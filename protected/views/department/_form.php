<?php
/* @var $this DepartmentController */
/* @var $model Department */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'department-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'schoolID'); ?>
		<?php echo $form->textField($model,'schoolID'); ?>
		<?php echo $form->error($model,'schoolID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'departmentcode'); ?>
		<?php echo $form->textField($model,'departmentcode'); ?>
		<?php echo $form->error($model,'departmentcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'departmentname'); ?>
		<?php echo $form->textField($model,'departmentname',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'departmentname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'roomno'); ?>
		<?php echo $form->textField($model,'roomno',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'roomno'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->