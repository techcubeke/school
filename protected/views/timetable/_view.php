<?php
/* @var $this TimetableController */
/* @var $data Timetable */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('timetableID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->timetableID), array('view', 'id'=>$data->timetableID)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('staffID')); ?>:</b>
	<?php echo CHtml::encode($data->staffID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subjectID')); ?>:</b>
	<?php echo CHtml::encode($data->subjectID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('periodID')); ?>:</b>
	<?php echo CHtml::encode($data->periodID); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dateadded')); ?>:</b>
	<?php echo CHtml::encode($data->dateadded); ?>
	<br />

	*/ ?>

</div>