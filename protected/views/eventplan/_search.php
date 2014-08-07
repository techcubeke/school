<?php
/* @var $this EventplanController */
/* @var $model Eventplan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'eventID'); ?>
		<?php echo $form->textField($model,'eventID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'schoolID'); ?>
		<?php echo $form->textField($model,'schoolID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eventname'); ?>
		<?php echo $form->textField($model,'eventname',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eventtype'); ?>
		<?php echo $form->textField($model,'eventtype',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eventfrom'); ?>
		<?php echo $form->textField($model,'eventfrom'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eventto'); ?>
		<?php echo $form->textField($model,'eventto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'isworkingday'); ?>
		<?php echo $form->textField($model,'isworkingday'); ?>
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