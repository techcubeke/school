<?php
/* @var $this EventplanController */
/* @var $model Eventplan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'eventplan-form',
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
		<?php echo $form->labelEx($model,'eventname'); ?>
		<?php echo $form->textField($model,'eventname',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'eventname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'eventtype'); ?>
		<?php echo $form->textField($model,'eventtype',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'eventtype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'eventfrom'); ?>
		<?php echo $form->textField($model,'eventfrom'); ?>
		<?php echo $form->error($model,'eventfrom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'eventto'); ?>
		<?php echo $form->textField($model,'eventto'); ?>
		<?php echo $form->error($model,'eventto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isworkingday'); ?>
		<?php echo $form->textField($model,'isworkingday'); ?>
		<?php echo $form->error($model,'isworkingday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateadded'); ?>
		<?php echo $form->textField($model,'dateadded'); ?>
		<?php echo $form->error($model,'dateadded'); ?>
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