<?php
/* @var $this DormroomController */
/* @var $model Dormroom */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dormroom-form',
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
		<?php echo $form->labelEx($model,'dormname'); ?>
		<?php echo $form->textField($model,'dormname',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'dormname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'beds'); ?>
		<?php echo $form->textField($model,'beds'); ?>
		<?php echo $form->error($model,'beds'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->