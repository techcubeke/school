<?php
/* @var $this FinancialyearController */
/* @var $data Financialyear */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('financialyearID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->financialyearID), array('view', 'id'=>$data->financialyearID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('schoolID')); ?>:</b>
	<?php echo CHtml::encode($data->schoolID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datefrom')); ?>:</b>
	<?php echo CHtml::encode($data->datefrom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateto')); ?>:</b>
	<?php echo CHtml::encode($data->dateto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isactive')); ?>:</b>
	<?php echo CHtml::encode($data->isactive); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateadded')); ?>:</b>
	<?php echo CHtml::encode($data->dateadded); ?>
	<br />


</div>