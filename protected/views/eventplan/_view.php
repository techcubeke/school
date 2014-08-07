<?php
/* @var $this EventplanController */
/* @var $data Eventplan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('eventID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->eventID), array('view', 'id'=>$data->eventID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('schoolID')); ?>:</b>
	<?php echo CHtml::encode($data->schoolID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eventname')); ?>:</b>
	<?php echo CHtml::encode($data->eventname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eventtype')); ?>:</b>
	<?php echo CHtml::encode($data->eventtype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eventfrom')); ?>:</b>
	<?php echo CHtml::encode($data->eventfrom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eventto')); ?>:</b>
	<?php echo CHtml::encode($data->eventto); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('isworkingday')); ?>:</b>
	<?php echo CHtml::encode($data->isworkingday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateadded')); ?>:</b>
	<?php echo CHtml::encode($data->dateadded); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datemodified')); ?>:</b>
	<?php echo CHtml::encode($data->datemodified); ?>
	<br />

	*/ ?>

</div>