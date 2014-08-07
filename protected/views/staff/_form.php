<?php
/* @var $this StaffController */
/* @var $model Staff */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'staff-form',
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
		<?php echo $form->labelEx($model,'employeecode'); ?>
		<?php echo $form->textField($model,'employeecode',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'employeecode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'initials'); ?>
		<?php echo $form->textField($model,'initials',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'initials'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'middlename'); ?>
		<?php echo $form->textField($model,'middlename',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'middlename'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'photoimage'); ?>
		<?php echo $form->textField($model,'photoimage',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'photoimage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employmenttype'); ?>
		<?php echo $form->textField($model,'employmenttype',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'employmenttype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->textField($model,'gender',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateofbirth'); ?>
		<?php echo $form->textField($model,'dateofbirth'); ?>
		<?php echo $form->error($model,'dateofbirth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phoneno'); ?>
		<?php echo $form->textField($model,'phoneno'); ?>
		<?php echo $form->error($model,'phoneno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'religion'); ?>
		<?php echo $form->textField($model,'religion',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'religion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jobtitle'); ?>
		<?php echo $form->textField($model,'jobtitle',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'jobtitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'specialization'); ?>
		<?php echo $form->textField($model,'specialization',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'specialization'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'maritalstatus'); ?>
		<?php echo $form->textField($model,'maritalstatus',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'maritalstatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'joindate'); ?>
		<?php echo $form->textField($model,'joindate'); ?>
		<?php echo $form->error($model,'joindate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'releasedate'); ?>
		<?php echo $form->textField($model,'releasedate'); ?>
		<?php echo $form->error($model,'releasedate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nationalID'); ?>
		<?php echo $form->textField($model,'nationalID'); ?>
		<?php echo $form->error($model,'nationalID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notes'); ?>
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'notes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'departmentcode'); ?>
		<?php echo $form->textField($model,'departmentcode'); ?>
		<?php echo $form->error($model,'departmentcode'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->