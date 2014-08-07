<?php
/* @var $this TimetableController */
/* @var $model Timetable */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'timetableID'); ?>
		<?php echo $form->textField($model,'timetableID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'schoolID'); ?>
		<?php echo $form->textField($model,'schoolID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'academicsessionID'); ?>
		<?php echo $form->textField($model,'academicsessionID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'classID'); ?>
		<?php echo $form->textField($model,'classID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'staffID'); ?>
		<?php echo $form->textField($model,'staffID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subjectID'); ?>
		<?php echo $form->textField($model,'subjectID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'periodID'); ?>
		<?php echo $form->textField($model,'periodID'); ?>
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