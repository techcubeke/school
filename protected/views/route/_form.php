<?php
/* @var $this RouteController */
/* @var $model Route */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'route-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'vehicleID'); ?>
		<?php echo $form->textField($model,'vehicleID'); ?>
		<?php echo $form->error($model,'vehicleID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'routename'); ?>
		<?php echo $form->textField($model,'routename',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'routename'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'noofstops'); ?>
		<?php echo $form->textField($model,'noofstops',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'noofstops'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->