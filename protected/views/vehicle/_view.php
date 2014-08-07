<?php
/* @var $this VehicleController */
/* @var $data Vehicle */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicleID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->vehicleID), array('view', 'id'=>$data->vehicleID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('schoolID')); ?>:</b>
	<?php echo CHtml::encode($data->schoolID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicleregnumber')); ?>:</b>
	<?php echo CHtml::encode($data->vehicleregnumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('manufacturingyear')); ?>:</b>
	<?php echo CHtml::encode($data->manufacturingyear); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicletype')); ?>:</b>
	<?php echo CHtml::encode($data->vehicletype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sitingcapacity')); ?>:</b>
	<?php echo CHtml::encode($data->sitingcapacity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dateadded')); ?>:</b>
	<?php echo CHtml::encode($data->dateadded); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datemodified')); ?>:</b>
	<?php echo CHtml::encode($data->datemodified); ?>
	<br />

	*/ ?>

</div>