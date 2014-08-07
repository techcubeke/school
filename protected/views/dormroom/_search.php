<?php
/* @var $this DormroomController */
/* @var $model Dormroom */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'dormID'); ?>
		<?php echo $form->textField($model,'dormID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'schoolID'); ?>
		<?php echo $form->textField($model,'schoolID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dormname'); ?>
		<?php echo $form->textField($model,'dormname',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'beds'); ?>
		<?php echo $form->textField($model,'beds'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->