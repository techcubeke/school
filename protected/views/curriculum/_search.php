<?php
/* @var $this CurriculumController */
/* @var $model Curriculum */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'curriculumID'); ?>
		<?php echo $form->textField($model,'curriculumID'); ?>
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
		<?php echo $form->label($model,'subjectID'); ?>
		<?php echo $form->textField($model,'subjectID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateaded'); ?>
		<?php echo $form->textField($model,'dateaded'); ?>
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