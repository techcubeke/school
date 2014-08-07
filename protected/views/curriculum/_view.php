<?php
/* @var $this CurriculumController */
/* @var $data Curriculum */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('curriculumID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->curriculumID), array('view', 'id'=>$data->curriculumID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('schoolID')); ?>:</b>
	<?php echo CHtml::encode($data->schoolID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('academicsessionID')); ?>:</b>
	<?php echo CHtml::encode($data->academicsessionID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('classID')); ?>:</b>
	<?php echo CHtml::encode($data->classID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subjectID')); ?>:</b>
	<?php echo CHtml::encode($data->subjectID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateaded')); ?>:</b>
	<?php echo CHtml::encode($data->dateaded); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datemodified')); ?>:</b>
	<?php echo CHtml::encode($data->datemodified); ?>
	<br />


</div>