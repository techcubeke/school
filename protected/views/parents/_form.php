<?php
/* @var $this ParentsController */
/* @var $model Parents */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'parents-form',
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
		<?php echo $form->labelEx($model,'studentID'); ?>
		<?php echo $form->textField($model,'studentID'); ?>
		<?php echo $form->error($model,'studentID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fullname'); ?>
		<?php echo $form->textField($model,'fullname',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'fullname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'photoimage'); ?>
		<?php echo $form->textField($model,'photoimage'); ?>
		<?php echo $form->error($model,'photoimage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parentrelation'); ?>
		<?php echo $form->textField($model,'parentrelation',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'parentrelation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'occupation'); ?>
		<?php echo $form->textField($model,'occupation',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'occupation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'officename'); ?>
		<?php echo $form->textField($model,'officename',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'officename'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'officeaddress'); ?>
		<?php echo $form->textField($model,'officeaddress',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'officeaddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phonenumber'); ?>
		<?php echo $form->textField($model,'phonenumber',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'phonenumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emailaddress'); ?>
		<?php echo $form->textField($model,'emailaddress',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'emailaddress'); ?>
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