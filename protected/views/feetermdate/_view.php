<?php
/* @var $this FeetermdateController */
/* @var $data Feetermdate */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('feetermdateID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->feetermdateID), array('view', 'id'=>$data->feetermdateID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('schoolID')); ?>:</b>
	<?php echo CHtml::encode($data->schoolID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('termnumber')); ?>:</b>
	<?php echo CHtml::encode($data->termnumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('termtitle')); ?>:</b>
	<?php echo CHtml::encode($data->termtitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('periodfrom')); ?>:</b>
	<?php echo CHtml::encode($data->periodfrom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('periodto')); ?>:</b>
	<?php echo CHtml::encode($data->periodto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('percentagecollection')); ?>:</b>
	<?php echo CHtml::encode($data->percentagecollection); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('duedate')); ?>:</b>
	<?php echo CHtml::encode($data->duedate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monthcount')); ?>:</b>
	<?php echo CHtml::encode($data->monthcount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateadded')); ?>:</b>
	<?php echo CHtml::encode($data->dateadded); ?>
	<br />

	*/ ?>

</div>