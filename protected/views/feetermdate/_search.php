<?php
/* @var $this FeetermdateController */
/* @var $model Feetermdate */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'feetermdateID'); ?>
		<?php echo $form->textField($model,'feetermdateID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'schoolID'); ?>
		<?php echo $form->textField($model,'schoolID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'termnumber'); ?>
		<?php echo $form->textField($model,'termnumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'termtitle'); ?>
		<?php echo $form->textField($model,'termtitle',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'periodfrom'); ?>
		<?php echo $form->textField($model,'periodfrom'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'periodto'); ?>
		<?php echo $form->textField($model,'periodto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'percentagecollection'); ?>
		<?php echo $form->textField($model,'percentagecollection'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'duedate'); ?>
		<?php echo $form->textField($model,'duedate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monthcount'); ?>
		<?php echo $form->textField($model,'monthcount'); ?>
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