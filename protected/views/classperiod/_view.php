<?php
/* @var $this ClassperiodController */
/* @var $data Classperiod */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('periodID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->periodID), array('view', 'id'=>$data->periodID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('starttime')); ?>:</b>
	<?php echo CHtml::encode($data->starttime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endtime')); ?>:</b>
	<?php echo CHtml::encode($data->endtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('break')); ?>:</b>
	<?php echo CHtml::encode($data->break); ?>
	<br />


</div>