<?php
/* @var $this AssetController */
/* @var $model Asset */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'asset-form',
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
		<?php echo $form->labelEx($model,'label'); ?>
		<?php echo $form->textField($model,'label',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'label'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'assettype'); ?>
		<?php echo $form->textField($model,'assettype',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'assettype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'originalvalue'); ?>
		<?php echo $form->textField($model,'originalvalue',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'originalvalue'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'currentvalue'); ?>
		<?php echo $form->textField($model,'currentvalue',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'currentvalue'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'accessiondate'); ?>
		<?php echo $form->textField($model,'accessiondate'); ?>
		<?php echo $form->error($model,'accessiondate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
		<?php echo $form->error($model,'quantity'); ?>
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