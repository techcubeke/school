<?php
/* @var $this VisitorpassController */
/* @var $model Visitorpass */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'visitorpass-form',
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
		<?php echo $form->labelEx($model,'visitorname'); ?>
		<?php echo $form->textField($model,'visitorname',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'visitorname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'visitorcardnumber'); ?>
		<?php echo $form->textField($model,'visitorcardnumber'); ?>
		<?php echo $form->error($model,'visitorcardnumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contactnumber'); ?>
		<?php echo $form->textField($model,'contactnumber',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'contactnumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numberofvisitors'); ?>
		<?php echo $form->textField($model,'numberofvisitors'); ?>
		<?php echo $form->error($model,'numberofvisitors'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'visitpurpose'); ?>
		<?php echo $form->textField($model,'visitpurpose',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'visitpurpose'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meetingwith'); ?>
		<?php echo $form->textField($model,'meetingwith',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'meetingwith'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'visitdate'); ?>
		<?php echo $form->textField($model,'visitdate'); ?>
		<?php echo $form->error($model,'visitdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'intime'); ?>
		<?php echo $form->textField($model,'intime'); ?>
		<?php echo $form->error($model,'intime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'outtime'); ?>
		<?php echo $form->textField($model,'outtime'); ?>
		<?php echo $form->error($model,'outtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comments'); ?>
		<?php echo $form->textArea($model,'comments',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comments'); ?>
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