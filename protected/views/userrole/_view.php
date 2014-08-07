<?php
/* @var $this UserroleController */
/* @var $data Userrole */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('roleID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->roleID), array('view', 'id'=>$data->roleID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('role')); ?>:</b>
	<?php echo CHtml::encode($data->role); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('roledescription')); ?>:</b>
	<?php echo CHtml::encode($data->roledescription); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateadded')); ?>:</b>
	<?php echo CHtml::encode($data->dateadded); ?>
	<br />


</div>