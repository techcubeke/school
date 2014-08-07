<?php
/* @var $this AssetController */
/* @var $data Asset */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('assetID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->assetID), array('view', 'id'=>$data->assetID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('schoolID')); ?>:</b>
	<?php echo CHtml::encode($data->schoolID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('label')); ?>:</b>
	<?php echo CHtml::encode($data->label); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('assettype')); ?>:</b>
	<?php echo CHtml::encode($data->assettype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('originalvalue')); ?>:</b>
	<?php echo CHtml::encode($data->originalvalue); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('currentvalue')); ?>:</b>
	<?php echo CHtml::encode($data->currentvalue); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('accessiondate')); ?>:</b>
	<?php echo CHtml::encode($data->accessiondate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departmentcode')); ?>:</b>
	<?php echo CHtml::encode($data->departmentcode); ?>
	<br />

	*/ ?>

</div>