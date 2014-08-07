<?php
/* @var $this ExamrecordController */
/* @var $data Examrecord */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('examID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->examID), array('view', 'id'=>$data->examID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('schoolID')); ?>:</b>
	<?php echo CHtml::encode($data->schoolID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('academicsessionID')); ?>:</b>
	<?php echo CHtml::encode($data->academicsessionID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('examtermID')); ?>:</b>
	<?php echo CHtml::encode($data->examtermID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subjectID')); ?>:</b>
	<?php echo CHtml::encode($data->subjectID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('classID')); ?>:</b>
	<?php echo CHtml::encode($data->classID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('studentID')); ?>:</b>
	<?php echo CHtml::encode($data->studentID); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('gradeID')); ?>:</b>
	<?php echo CHtml::encode($data->gradeID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('totalmarks')); ?>:</b>
	<?php echo CHtml::encode($data->totalmarks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('score')); ?>:</b>
	<?php echo CHtml::encode($data->score); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('percentage')); ?>:</b>
	<?php echo CHtml::encode($data->percentage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remarks')); ?>:</b>
	<?php echo CHtml::encode($data->remarks); ?>
	<br />

	*/ ?>

</div>