<?php
/* @var $this DepartmentController */
/* @var $data Department */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('departmentID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->departmentID), array('view', 'id'=>$data->departmentID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('schoolID')); ?>:</b>
	<?php echo CHtml::encode($data->schoolID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departmentcode')); ?>:</b>
	<?php echo CHtml::encode($data->departmentcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departmentname')); ?>:</b>
	<?php echo CHtml::encode($data->departmentname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('roomno')); ?>:</b>
	<?php echo CHtml::encode($data->roomno); ?>
	<br />


</div>