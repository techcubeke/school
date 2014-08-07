<?php
/* @var $this SchoolinfoController */
/* @var $data Schoolinfo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('schoolname')); ?>:</b>
	<?php echo CHtml::encode($data->schoolname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('logo')); ?>:</b>
	<?php echo CHtml::encode($data->logo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('motto')); ?>:</b>
	<?php echo CHtml::encode($data->motto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('principal')); ?>:</b>
	<?php echo CHtml::encode($data->principal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foundationdate')); ?>:</b>
	<?php echo CHtml::encode($data->foundationdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foundedby')); ?>:</b>
	<?php echo CHtml::encode($data->foundedby); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('phoneno')); ?>:</b>
	<?php echo CHtml::encode($data->phoneno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('website')); ?>:</b>
	<?php echo CHtml::encode($data->website); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zippostal')); ?>:</b>
	<?php echo CHtml::encode($data->zippostal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addressline1')); ?>:</b>
	<?php echo CHtml::encode($data->addressline1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addressline2')); ?>:</b>
	<?php echo CHtml::encode($data->addressline2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('about')); ?>:</b>
	<?php echo CHtml::encode($data->about); ?>
	<br />

	*/ ?>

</div>