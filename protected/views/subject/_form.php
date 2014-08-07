<?php
/* @var $this SubjectController */
/* @var $model Subject */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'subject-form',
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
		<?php echo $form->labelEx($model,'subjectname'); ?>
		<?php echo $form->textField($model,'subjectname',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'subjectname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subjectgroup'); ?>
		<?php echo $form->textField($model,'subjectgroup',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'subjectgroup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subjectcode'); ?>
		<?php echo $form->textField($model,'subjectcode'); ?>
		<?php echo $form->error($model,'subjectcode'); ?>
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