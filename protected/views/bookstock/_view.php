<?php
/* @var $this BookstockController */
/* @var $data Bookstock */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('bookstockID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->bookstockID), array('view', 'id'=>$data->bookstockID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('schoolID')); ?>:</b>
	<?php echo CHtml::encode($data->schoolID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vendorID')); ?>:</b>
	<?php echo CHtml::encode($data->vendorID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bookID')); ?>:</b>
	<?php echo CHtml::encode($data->bookID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('barcodevalue')); ?>:</b>
	<?php echo CHtml::encode($data->barcodevalue); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bookposition')); ?>:</b>
	<?php echo CHtml::encode($data->bookposition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purchasedate')); ?>:</b>
	<?php echo CHtml::encode($data->purchasedate); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('purchasedby')); ?>:</b>
	<?php echo CHtml::encode($data->purchasedby); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('instock')); ?>:</b>
	<?php echo CHtml::encode($data->instock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isreference')); ?>:</b>
	<?php echo CHtml::encode($data->isreference); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reason')); ?>:</b>
	<?php echo CHtml::encode($data->reason); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateadded')); ?>:</b>
	<?php echo CHtml::encode($data->dateadded); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datemodified')); ?>:</b>
	<?php echo CHtml::encode($data->datemodified); ?>
	<br />

	*/ ?>

</div>