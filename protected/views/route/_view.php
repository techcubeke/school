<?php
/* @var $this RouteController */
/* @var $data Route */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('routeID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->routeID), array('view', 'id'=>$data->routeID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicleID')); ?>:</b>
	<?php echo CHtml::encode($data->vehicleID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('routename')); ?>:</b>
	<?php echo CHtml::encode($data->routename); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('noofstops')); ?>:</b>
	<?php echo CHtml::encode($data->noofstops); ?>
	<br />


</div>