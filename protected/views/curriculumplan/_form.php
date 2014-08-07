<?php
/* @var $this CurriculumplanController */
/* @var $model Curriculumplan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'curriculumplan-form',
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
		<?php echo $form->labelEx($model,'curriculumID'); ?>
		<?php echo $form->textField($model,'curriculumID'); ?>
		<?php echo $form->error($model,'curriculumID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bookID'); ?>
		<?php echo $form->textField($model,'bookID'); ?>
		<?php echo $form->error($model,'bookID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'planmonth'); ?>
		<?php echo $form->textField($model,'planmonth',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'planmonth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'topic'); ?>
		<?php echo $form->textField($model,'topic',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'topic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subtopic'); ?>
		<?php echo $form->textField($model,'subtopic',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'subtopic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activity'); ?>
		<?php echo $form->textField($model,'activity',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'activity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iscompleted'); ?>
		<?php echo $form->textField($model,'iscompleted'); ?>
		<?php echo $form->error($model,'iscompleted'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateadded'); ?>
		<?php echo $form->textField($model,'dateadded'); ?>
		<?php echo $form->error($model,'dateadded'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'datemodified'); ?>
		<?php echo $form->textField($model,'datemodified'); ?>
		<?php echo $form->error($model,'datemodified'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->