<?php
/* @var $this FeetermdateController */
/* @var $model Feetermdate */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'feetermdate-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'schoolID'); ?>
		<?php echo $form->textField($model,'schoolID'); ?>
		<?php echo $form->error($model,'schoolID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'termnumber'); ?>
		<?php echo $form->textField($model,'termnumber'); ?>
		<?php echo $form->error($model,'termnumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'termtitle'); ?>
		<?php echo $form->textField($model,'termtitle',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'termtitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'periodfrom'); ?>
		<?php echo $form->textField($model,'periodfrom'); ?>
		<?php echo $form->error($model,'periodfrom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'periodto'); ?>
		<?php echo $form->textField($model,'periodto'); ?>
		<?php echo $form->error($model,'periodto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'percentagecollection'); ?>
		<?php echo $form->textField($model,'percentagecollection'); ?>
		<?php echo $form->error($model,'percentagecollection'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'duedate'); ?>
		<?php echo $form->textField($model,'duedate'); ?>
		<?php echo $form->error($model,'duedate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monthcount'); ?>
		<?php echo $form->textField($model,'monthcount'); ?>
		<?php echo $form->error($model,'monthcount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateadded'); ?>
		<?php echo $form->textField($model,'dateadded'); ?>
		<?php echo $form->error($model,'dateadded'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->