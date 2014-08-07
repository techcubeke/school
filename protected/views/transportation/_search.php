<?php
/* @var $this TransportationController */
/* @var $model Transportation */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'transportationID'); ?>
		<?php echo $form->textField($model,'transportationID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'studentID'); ?>
		<?php echo $form->textField($model,'studentID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stopID'); ?>
		<?php echo $form->textField($model,'stopID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ispaid'); ?>
		<?php echo $form->textField($model,'ispaid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->