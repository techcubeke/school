<?php
/* @var $this FeepaymentController */
/* @var $model Feepayment */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'feepaymentID'); ?>
		<?php echo $form->textField($model,'feepaymentID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'schoolID'); ?>
		<?php echo $form->textField($model,'schoolID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'feereceiptID'); ?>
		<?php echo $form->textField($model,'feereceiptID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'financialyearID'); ?>
		<?php echo $form->textField($model,'financialyearID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paymentdate'); ?>
		<?php echo $form->textField($model,'paymentdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paymentmode'); ?>
		<?php echo $form->textField($model,'paymentmode',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paidamount'); ?>
		<?php echo $form->textField($model,'paidamount',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adjustedamount'); ?>
		<?php echo $form->textField($model,'adjustedamount',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'chequedate'); ?>
		<?php echo $form->textField($model,'chequedate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'chequenumber'); ?>
		<?php echo $form->textField($model,'chequenumber',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bankbranch'); ?>
		<?php echo $form->textField($model,'bankbranch',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'remarks'); ?>
		<?php echo $form->textArea($model,'remarks',array('rows'=>6, 'cols'=>50)); ?>
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