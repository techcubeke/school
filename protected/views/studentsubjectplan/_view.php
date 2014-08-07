<?php
/* @var $this StudentsubjectplanController */
/* @var $data Studentsubjectplan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('subjectplanID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->subjectplanID), array('view', 'id'=>$data->subjectplanID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('schoolID')); ?>:</b>
	<?php echo CHtml::encode($data->schoolID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('academicsessionID')); ?>:</b>
	<?php echo CHtml::encode($data->academicsessionID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('studentID')); ?>:</b>
	<?php echo CHtml::encode($data->studentID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subjectID')); ?>:</b>
	<?php echo CHtml::encode($data->subjectID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateadded')); ?>:</b>
	<?php echo CHtml::encode($data->dateadded); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datemodified')); ?>:</b>
	<?php echo CHtml::encode($data->datemodified); ?>
	<br />


</div>