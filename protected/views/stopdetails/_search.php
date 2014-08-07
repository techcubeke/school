<?php
/* @var $this StopdetailsController */
/* @var $model Stopdetails */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'stopID'); ?>
		<?php echo $form->textField($model,'stopID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'routeID'); ?>
		<?php echo $form->textField($model,'routeID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stopname'); ?>
		<?php echo $form->textField($model,'stopname',array('size'=>60,'maxlength'=>120)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fare'); ?>
		<?php echo $form->textField($model,'fare',array('size'=>60,'maxlength'=>120)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'arrivalmrng'); ?>
		<?php echo $form->textField($model,'arrivalmrng'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'depaturemrng'); ?>
		<?php echo $form->textField($model,'depaturemrng'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'arrivalevng'); ?>
		<?php echo $form->textField($model,'arrivalevng'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'depatureevng'); ?>
		<?php echo $form->textField($model,'depatureevng'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->