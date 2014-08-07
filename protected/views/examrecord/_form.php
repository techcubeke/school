<?php
/* @var $this ExamrecordController */
/* @var $model Examrecord */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'examrecord-form',
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
		<?php echo $form->labelEx($model,'examtermID'); ?>
		<?php echo $form->textField($model,'examtermID'); ?>
		<?php echo $form->error($model,'examtermID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subjectID'); ?>
		<?php echo $form->textField($model,'subjectID'); ?>
		<?php echo $form->error($model,'subjectID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'classID'); ?>
		<?php echo $form->textField($model,'classID'); ?>
		<?php echo $form->error($model,'classID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'studentID'); ?>
		<?php echo $form->textField($model,'studentID'); ?>
		<?php echo $form->error($model,'studentID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gradeID'); ?>
		<?php echo $form->textField($model,'gradeID'); ?>
		<?php echo $form->error($model,'gradeID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'totalmarks'); ?>
		<?php echo $form->textField($model,'totalmarks'); ?>
		<?php echo $form->error($model,'totalmarks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'score'); ?>
		<?php echo $form->textField($model,'score'); ?>
		<?php echo $form->error($model,'score'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'percentage'); ?>
		<?php echo $form->textField($model,'percentage'); ?>
		<?php echo $form->error($model,'percentage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remarks'); ?>
		<?php echo $form->textArea($model,'remarks',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'remarks'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->