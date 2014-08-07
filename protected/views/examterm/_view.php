<?php
/* @var $this ExamtermController */
/* @var $data Examterm */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('examtermID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->examtermID), array('view', 'id'=>$data->examtermID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('schoolID')); ?>:</b>
	<?php echo CHtml::encode($data->schoolID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('examtermname')); ?>:</b>
	<?php echo CHtml::encode($data->examtermname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateadded')); ?>:</b>
	<?php echo CHtml::encode($data->dateadded); ?>
	<br />


</div>