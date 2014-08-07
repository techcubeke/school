<?php
/* @var $this BookissuereturnController */
/* @var $model Bookissuereturn */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bookissuereturn-form',
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
		<?php echo $form->labelEx($model,'bookstockID'); ?>
		<?php echo $form->textField($model,'bookstockID'); ?>
		<?php echo $form->error($model,'bookstockID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'personID'); ?>
		<?php echo $form->textField($model,'personID'); ?>
		<?php echo $form->error($model,'personID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateissue'); ?>
		<?php echo $form->textField($model,'dateissue'); ?>
		<?php echo $form->error($model,'dateissue'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'datereturn'); ?>
		<?php echo $form->textField($model,'datereturn'); ?>
		<?php echo $form->error($model,'datereturn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'duedate'); ?>
		<?php echo $form->textField($model,'duedate'); ?>
		<?php echo $form->error($model,'duedate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'issuedby'); ?>
		<?php echo $form->textField($model,'issuedby',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'issuedby'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fine'); ?>
		<?php echo $form->textField($model,'fine'); ?>
		<?php echo $form->error($model,'fine'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isfinepaid'); ?>
		<?php echo $form->textField($model,'isfinepaid'); ?>
		<?php echo $form->error($model,'isfinepaid'); ?>
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