<?php
/* @var $this FeereceiptController */
/* @var $model Feereceipt */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'feereceipt-form',
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
		<?php echo $form->labelEx($model,'classID'); ?>
		<?php echo $form->textField($model,'classID'); ?>
		<?php echo $form->error($model,'classID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'invoicedate'); ?>
		<?php echo $form->textField($model,'invoicedate'); ?>
		<?php echo $form->error($model,'invoicedate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'termtitle'); ?>
		<?php echo $form->textField($model,'termtitle',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'termtitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'periodfrom'); ?>
		<?php echo $form->textField($model,'periodfrom'); ?>
		<?php echo $form->error($model,'periodfrom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'periodto'); ?>
		<?php echo $form->textField($model,'periodto'); ?>
		<?php echo $form->error($model,'periodto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'previousinvoiceamount'); ?>
		<?php echo $form->textField($model,'previousinvoiceamount',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'previousinvoiceamount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'previousamount'); ?>
		<?php echo $form->textField($model,'previousamount',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'previousamount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'duedate'); ?>
		<?php echo $form->textField($model,'duedate'); ?>
		<?php echo $form->error($model,'duedate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adjustedamount'); ?>
		<?php echo $form->textField($model,'adjustedamount',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'adjustedamount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'totalamount'); ?>
		<?php echo $form->textField($model,'totalamount',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'totalamount'); ?>
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