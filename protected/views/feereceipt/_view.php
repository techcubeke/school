<?php
/* @var $this FeereceiptController */
/* @var $data Feereceipt */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('feereceiptID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->feereceiptID), array('view', 'id'=>$data->feereceiptID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('schoolID')); ?>:</b>
	<?php echo CHtml::encode($data->schoolID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('studentID')); ?>:</b>
	<?php echo CHtml::encode($data->studentID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('classID')); ?>:</b>
	<?php echo CHtml::encode($data->classID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('invoicedate')); ?>:</b>
	<?php echo CHtml::encode($data->invoicedate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('termtitle')); ?>:</b>
	<?php echo CHtml::encode($data->termtitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('periodfrom')); ?>:</b>
	<?php echo CHtml::encode($data->periodfrom); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('periodto')); ?>:</b>
	<?php echo CHtml::encode($data->periodto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('previousinvoiceamount')); ?>:</b>
	<?php echo CHtml::encode($data->previousinvoiceamount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('previousamount')); ?>:</b>
	<?php echo CHtml::encode($data->previousamount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duedate')); ?>:</b>
	<?php echo CHtml::encode($data->duedate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adjustedamount')); ?>:</b>
	<?php echo CHtml::encode($data->adjustedamount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('totalamount')); ?>:</b>
	<?php echo CHtml::encode($data->totalamount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateadded')); ?>:</b>
	<?php echo CHtml::encode($data->dateadded); ?>
	<br />

	*/ ?>

</div>