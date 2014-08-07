<?php
/* @var $this ClassroomController */
/* @var $model Classroom */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'classroom-form',
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
		<?php echo $form->labelEx($model,'classificationID'); ?>
		<?php echo $form->textField($model,'classificationID'); ?>
		<?php echo $form->error($model,'classificationID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'classname'); ?>
		<?php echo $form->textField($model,'classname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'classname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'staffID'); ?>
		<?php echo $form->textField($model,'staffID'); ?>
		<?php echo $form->error($model,'staffID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->