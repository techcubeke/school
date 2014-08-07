<?php
/* @var $this FuelconsumptionController */
/* @var $model Fuelconsumption */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'fuelID'); ?>
		<?php echo $form->textField($model,'fuelID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vehicleID'); ?>
		<?php echo $form->textField($model,'vehicleID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fuelconsumed'); ?>
		<?php echo $form->textField($model,'fuelconsumed',array('size'=>60,'maxlength'=>120)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'amount'); ?>
		<?php echo $form->textField($model,'amount',array('size'=>60,'maxlength'=>120)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'consumeddate'); ?>
		<?php echo $form->textField($model,'consumeddate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->