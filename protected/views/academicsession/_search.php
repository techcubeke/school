<?php
/* @var $this AcademicsessionController */
/* @var $model Academicsession */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'academicsessionID'); ?>
		<?php echo $form->textField($model,'academicsessionID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'schoolID'); ?>
		<?php echo $form->textField($model,'schoolID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sessionyear'); ?>
		<?php echo $form->textField($model,'sessionyear',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sessionopendate'); ?>
		<?php echo $form->textField($model,'sessionopendate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sessionclosedate'); ?>
		<?php echo $form->textField($model,'sessionclosedate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sessionstatus'); ?>
		<?php echo $form->textField($model,'sessionstatus',array('size'=>11,'maxlength'=>11)); ?>
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