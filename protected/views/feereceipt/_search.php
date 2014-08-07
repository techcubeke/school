<?php
/* @var $this FeereceiptController */
/* @var $model Feereceipt */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'feereceiptID'); ?>
		<?php echo $form->textField($model,'feereceiptID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'schoolID'); ?>
		<?php echo $form->textField($model,'schoolID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'studentID'); ?>
		<?php echo $form->textField($model,'studentID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'classID'); ?>
		<?php echo $form->textField($model,'classID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'invoicedate'); ?>
		<?php echo $form->textField($model,'invoicedate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'termtitle'); ?>
		<?php echo $form->textField($model,'termtitle',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'periodfrom'); ?>
		<?php echo $form->textField($model,'periodfrom'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'periodto'); ?>
		<?php echo $form->textField($model,'periodto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'previousinvoiceamount'); ?>
		<?php echo $form->textField($model,'previousinvoiceamount',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'previousamount'); ?>
		<?php echo $form->textField($model,'previousamount',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'duedate'); ?>
		<?php echo $form->textField($model,'duedate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adjustedamount'); ?>
		<?php echo $form->textField($model,'adjustedamount',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'totalamount'); ?>
		<?php echo $form->textField($model,'totalamount',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateadded'); ?>
		<?php echo $form->textField($model,'dateadded'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->