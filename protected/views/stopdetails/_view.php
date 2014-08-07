<?php
/* @var $this StopdetailsController */
/* @var $data Stopdetails */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('stopID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->stopID), array('view', 'id'=>$data->stopID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('routeID')); ?>:</b>
	<?php echo CHtml::encode($data->routeID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stopname')); ?>:</b>
	<?php echo CHtml::encode($data->stopname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fare')); ?>:</b>
	<?php echo CHtml::encode($data->fare); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('arrivalmrng')); ?>:</b>
	<?php echo CHtml::encode($data->arrivalmrng); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('depaturemrng')); ?>:</b>
	<?php echo CHtml::encode($data->depaturemrng); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('arrivalevng')); ?>:</b>
	<?php echo CHtml::encode($data->arrivalevng); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('depatureevng')); ?>:</b>
	<?php echo CHtml::encode($data->depatureevng); ?>
	<br />

	*/ ?>

</div>