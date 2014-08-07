<?php
/* @var $this BookstockController */
/* @var $model Bookstock */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bookstock-form',
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
		<?php echo $form->labelEx($model,'vendorID'); ?>
		<?php echo $form->textField($model,'vendorID'); ?>
		<?php echo $form->error($model,'vendorID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bookID'); ?>
		<?php echo $form->textField($model,'bookID'); ?>
		<?php echo $form->error($model,'bookID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'barcodevalue'); ?>
		<?php echo $form->textField($model,'barcodevalue',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'barcodevalue'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bookposition'); ?>
		<?php echo $form->textField($model,'bookposition',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'bookposition'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'purchasedate'); ?>
		<?php echo $form->textField($model,'purchasedate'); ?>
		<?php echo $form->error($model,'purchasedate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'purchasedby'); ?>
		<?php echo $form->textField($model,'purchasedby',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'purchasedby'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'instock'); ?>
		<?php echo $form->textField($model,'instock'); ?>
		<?php echo $form->error($model,'instock'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isreference'); ?>
		<?php echo $form->textField($model,'isreference'); ?>
		<?php echo $form->error($model,'isreference'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reason'); ?>
		<?php echo $form->textArea($model,'reason',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'reason'); ?>
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