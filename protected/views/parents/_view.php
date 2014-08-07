<?php
/* @var $this ParentsController */
/* @var $data Parents */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('parentID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->parentID), array('view', 'id'=>$data->parentID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('schoolID')); ?>:</b>
	<?php echo CHtml::encode($data->schoolID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('studentID')); ?>:</b>
	<?php echo CHtml::encode($data->studentID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fullname')); ?>:</b>
	<?php echo CHtml::encode($data->fullname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photoimage')); ?>:</b>
	<?php echo CHtml::encode($data->photoimage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parentrelation')); ?>:</b>
	<?php echo CHtml::encode($data->parentrelation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('occupation')); ?>:</b>
	<?php echo CHtml::encode($data->occupation); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('officename')); ?>:</b>
	<?php echo CHtml::encode($data->officename); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('officeaddress')); ?>:</b>
	<?php echo CHtml::encode($data->officeaddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phonenumber')); ?>:</b>
	<?php echo CHtml::encode($data->phonenumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emailaddress')); ?>:</b>
	<?php echo CHtml::encode($data->emailaddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateadded')); ?>:</b>
	<?php echo CHtml::encode($data->dateadded); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datemodified')); ?>:</b>
	<?php echo CHtml::encode($data->datemodified); ?>
	<br />

	*/ ?>

</div>