<?php
/* @var $this TimetableController */
/* @var $model Timetable */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'timetable-form',
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
		<?php echo $form->labelEx($model,'academicsessionID'); ?>
		<?php echo $form->textField($model,'academicsessionID'); ?>
		<?php echo $form->error($model,'academicsessionID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'classID'); ?>
		<?php echo $form->textField($model,'classID'); ?>
		<?php echo $form->error($model,'classID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'staffID'); ?>
		<?php echo $form->textField($model,'staffID'); ?>
		<?php echo $form->error($model,'staffID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subjectID'); ?>
		<?php echo $form->textField($model,'subjectID'); ?>
		<?php echo $form->error($model,'subjectID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'periodID'); ?>
		<?php echo $form->textField($model,'periodID'); ?>
		<?php echo $form->error($model,'periodID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateadded'); ?>
		<?php echo $form->textField($model,'dateadded'); ?>
		<?php echo $form->error($model,'dateadded'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->