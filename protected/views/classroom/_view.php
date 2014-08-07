<?php
/* @var $this ClassroomController */
/* @var $data Classroom */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('classID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->classID), array('view', 'id'=>$data->classID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('schoolID')); ?>:</b>
	<?php echo CHtml::encode($data->schoolID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('classificationID')); ?>:</b>
	<?php echo CHtml::encode($data->classificationID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('classname')); ?>:</b>
	<?php echo CHtml::encode($data->classname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('staffID')); ?>:</b>
	<?php echo CHtml::encode($data->staffID); ?>
	<br />


</div>