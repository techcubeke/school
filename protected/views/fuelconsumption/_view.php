<?php
/* @var $this FuelconsumptionController */
/* @var $data Fuelconsumption */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('fuelID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->fuelID), array('view', 'id'=>$data->fuelID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicleID')); ?>:</b>
	<?php echo CHtml::encode($data->vehicleID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fuelconsumed')); ?>:</b>
	<?php echo CHtml::encode($data->fuelconsumed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consumeddate')); ?>:</b>
	<?php echo CHtml::encode($data->consumeddate); ?>
	<br />


</div>