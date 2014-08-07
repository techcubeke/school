<?php
/* @var $this VehicleController */
/* @var $model Vehicle */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vehicle-form',
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
		<?php echo $form->labelEx($model,'vehicleregnumber'); ?>
		<?php echo $form->textField($model,'vehicleregnumber',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'vehicleregnumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'manufacturingyear'); ?>
		<?php echo $form->textField($model,'manufacturingyear'); ?>
		<?php echo $form->error($model,'manufacturingyear'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vehicletype'); ?>
		<?php echo $form->textField($model,'vehicletype',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'vehicletype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sitingcapacity'); ?>
		<?php echo $form->textField($model,'sitingcapacity'); ?>
		<?php echo $form->error($model,'sitingcapacity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textArea($model,'status',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'status'); ?>
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