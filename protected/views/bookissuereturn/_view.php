<?php
/* @var $this BookissuereturnController */
/* @var $data Bookissuereturn */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('bookissuereturnID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->bookissuereturnID), array('view', 'id'=>$data->bookissuereturnID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('schoolID')); ?>:</b>
	<?php echo CHtml::encode($data->schoolID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bookstockID')); ?>:</b>
	<?php echo CHtml::encode($data->bookstockID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personID')); ?>:</b>
	<?php echo CHtml::encode($data->personID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateissue')); ?>:</b>
	<?php echo CHtml::encode($data->dateissue); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datereturn')); ?>:</b>
	<?php echo CHtml::encode($data->datereturn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duedate')); ?>:</b>
	<?php echo CHtml::encode($data->duedate); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('issuedby')); ?>:</b>
	<?php echo CHtml::encode($data->issuedby); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fine')); ?>:</b>
	<?php echo CHtml::encode($data->fine); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isfinepaid')); ?>:</b>
	<?php echo CHtml::encode($data->isfinepaid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateadded')); ?>:</b>
	<?php echo CHtml::encode($data->dateadded); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datemodified')); ?>:</b>
	<?php echo CHtml::encode($data->datemodified); ?>
	<br />

	*/ ?>

</div>