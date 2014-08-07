<?php
/* @var $this TransportationController */
/* @var $data Transportation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('transportationID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->transportationID), array('view', 'id'=>$data->transportationID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('studentID')); ?>:</b>
	<?php echo CHtml::encode($data->studentID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stopID')); ?>:</b>
	<?php echo CHtml::encode($data->stopID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ispaid')); ?>:</b>
	<?php echo CHtml::encode($data->ispaid); ?>
	<br />


</div>