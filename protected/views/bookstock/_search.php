<?php
/* @var $this BookstockController */
/* @var $model Bookstock */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'bookstockID'); ?>
		<?php echo $form->textField($model,'bookstockID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'schoolID'); ?>
		<?php echo $form->textField($model,'schoolID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vendorID'); ?>
		<?php echo $form->textField($model,'vendorID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bookID'); ?>
		<?php echo $form->textField($model,'bookID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'barcodevalue'); ?>
		<?php echo $form->textField($model,'barcodevalue',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bookposition'); ?>
		<?php echo $form->textField($model,'bookposition',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'purchasedate'); ?>
		<?php echo $form->textField($model,'purchasedate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'purchasedby'); ?>
		<?php echo $form->textField($model,'purchasedby',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'instock'); ?>
		<?php echo $form->textField($model,'instock'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isreference'); ?>
		<?php echo $form->textField($model,'isreference'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reason'); ?>
		<?php echo $form->textArea($model,'reason',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateadded'); ?>
		<?php echo $form->textField($model,'dateadded'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'datemodified'); ?>
		<?php echo $form->textField($model,'datemodified'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->