<?php
/* @var $this GradesController */
/* @var $data Grades */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('gradeID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->gradeID), array('view', 'id'=>$data->gradeID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('minscore')); ?>:</b>
	<?php echo CHtml::encode($data->minscore); ?>
	<br />


</div>