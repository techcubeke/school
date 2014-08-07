<?php
/* @var $this FeepaymentController */
/* @var $data Feepayment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('feepaymentID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->feepaymentID), array('view', 'id'=>$data->feepaymentID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('schoolID')); ?>:</b>
	<?php echo CHtml::encode($data->schoolID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('feereceiptID')); ?>:</b>
	<?php echo CHtml::encode($data->feereceiptID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('financialyearID')); ?>:</b>
	<?php echo CHtml::encode($data->financialyearID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paymentdate')); ?>:</b>
	<?php echo CHtml::encode($data->paymentdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paymentmode')); ?>:</b>
	<?php echo CHtml::encode($data->paymentmode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paidamount')); ?>:</b>
	<?php echo CHtml::encode($data->paidamount); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('adjustedamount')); ?>:</b>
	<?php echo CHtml::encode($data->adjustedamount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chequedate')); ?>:</b>
	<?php echo CHtml::encode($data->chequedate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chequenumber')); ?>:</b>
	<?php echo CHtml::encode($data->chequenumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bankbranch')); ?>:</b>
	<?php echo CHtml::encode($data->bankbranch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remarks')); ?>:</b>
	<?php echo CHtml::encode($data->remarks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateadded')); ?>:</b>
	<?php echo CHtml::encode($data->dateadded); ?>
	<br />

	*/ ?>

</div>