<?php
/* @var $this AcademicsessionController */
/* @var $data Academicsession */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('academicsessionID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->academicsessionID), array('view', 'id'=>$data->academicsessionID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('schoolID')); ?>:</b>
	<?php echo CHtml::encode($data->schoolID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sessionyear')); ?>:</b>
	<?php echo CHtml::encode($data->sessionyear); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sessionopendate')); ?>:</b>
	<?php echo CHtml::encode($data->sessionopendate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sessionclosedate')); ?>:</b>
	<?php echo CHtml::encode($data->sessionclosedate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sessionstatus')); ?>:</b>
	<?php echo CHtml::encode($data->sessionstatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateadded')); ?>:</b>
	<?php echo CHtml::encode($data->dateadded); ?>
	<br />


</div>