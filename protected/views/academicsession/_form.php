<?php
/* @var $this AcademicsessionController */
/* @var $model Academicsession */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'academicsession-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'academicsessionID'); ?>
		<?php echo $form->textField($model,'academicsessionID'); ?>
		<?php echo $form->error($model,'academicsessionID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'schoolID'); ?>
		<?php echo $form->textField($model,'schoolID'); ?>
		<?php echo $form->error($model,'schoolID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sessionyear'); ?>
		<?php echo $form->textField($model,'sessionyear',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'sessionyear'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sessionopendate'); ?>
		<?php echo $form->textField($model,'sessionopendate'); ?>
		<?php echo $form->error($model,'sessionopendate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sessionclosedate'); ?>
		<?php echo $form->textField($model,'sessionclosedate'); ?>
		<?php echo $form->error($model,'sessionclosedate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sessionstatus'); ?>
		<?php echo $form->textField($model,'sessionstatus',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'sessionstatus'); ?>
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