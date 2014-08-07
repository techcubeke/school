<?php
/* @var $this CurriculumController */
/* @var $model Curriculum */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'curriculum-form',
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
		<?php echo $form->labelEx($model,'subjectID'); ?>
		<?php echo $form->textField($model,'subjectID'); ?>
		<?php echo $form->error($model,'subjectID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateaded'); ?>
		<?php echo $form->textField($model,'dateaded'); ?>
		<?php echo $form->error($model,'dateaded'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'datemodified'); ?>
		<?php echo $form->textField($model,'datemodified'); ?>
		<?php echo $form->error($model,'datemodified'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->