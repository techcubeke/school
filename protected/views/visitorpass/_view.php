<?php
/* @var $this VisitorpassController */
/* @var $data Visitorpass */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('visitorpassID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->visitorpassID), array('view', 'id'=>$data->visitorpassID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('schoolID')); ?>:</b>
	<?php echo CHtml::encode($data->schoolID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visitorname')); ?>:</b>
	<?php echo CHtml::encode($data->visitorname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visitorcardnumber')); ?>:</b>
	<?php echo CHtml::encode($data->visitorcardnumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contactnumber')); ?>:</b>
	<?php echo CHtml::encode($data->contactnumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numberofvisitors')); ?>:</b>
	<?php echo CHtml::encode($data->numberofvisitors); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('visitpurpose')); ?>:</b>
	<?php echo CHtml::encode($data->visitpurpose); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meetingwith')); ?>:</b>
	<?php echo CHtml::encode($data->meetingwith); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visitdate')); ?>:</b>
	<?php echo CHtml::encode($data->visitdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('intime')); ?>:</b>
	<?php echo CHtml::encode($data->intime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('outtime')); ?>:</b>
	<?php echo CHtml::encode($data->outtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comments')); ?>:</b>
	<?php echo CHtml::encode($data->comments); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateadded')); ?>:</b>
	<?php echo CHtml::encode($data->dateadded); ?>
	<br />

	*/ ?>

</div>