<?php
/* @var $this PersonController */
/* @var $data Person */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('personID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->personID), array('view', 'id'=>$data->personID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('schoolID')); ?>:</b>
	<?php echo CHtml::encode($data->schoolID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personprofile')); ?>:</b>
	<?php echo CHtml::encode($data->personprofile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('studentID')); ?>:</b>
	<?php echo CHtml::encode($data->studentID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('staffID')); ?>:</b>
	<?php echo CHtml::encode($data->staffID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parentID')); ?>:</b>
	<?php echo CHtml::encode($data->parentID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vendorID')); ?>:</b>
	<?php echo CHtml::encode($data->vendorID); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dateadded')); ?>:</b>
	<?php echo CHtml::encode($data->dateadded); ?>
	<br />

	*/ ?>

</div>