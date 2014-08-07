<?php
/* @var $this RouteController */
/* @var $model Route */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'routeID'); ?>
		<?php echo $form->textField($model,'routeID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vehicleID'); ?>
		<?php echo $form->textField($model,'vehicleID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'routename'); ?>
		<?php echo $form->textField($model,'routename',array('size'=>60,'maxlength'=>120)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'noofstops'); ?>
		<?php echo $form->textField($model,'noofstops',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->