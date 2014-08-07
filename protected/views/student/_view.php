<?php
/* @var $this StudentController */
/* @var $data Student */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('studentID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->studentID), array('view', 'id'=>$data->studentID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('schoolID')); ?>:</b>
	<?php echo CHtml::encode($data->schoolID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('academicsessionID')); ?>:</b>
	<?php echo CHtml::encode($data->academicsessionID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adminno')); ?>:</b>
	<?php echo CHtml::encode($data->adminno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firstname')); ?>:</b>
	<?php echo CHtml::encode($data->firstname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('middlename')); ?>:</b>
	<?php echo CHtml::encode($data->middlename); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastname')); ?>:</b>
	<?php echo CHtml::encode($data->lastname); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dateofbirth')); ?>:</b>
	<?php echo CHtml::encode($data->dateofbirth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('citizenship')); ?>:</b>
	<?php echo CHtml::encode($data->citizenship); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parentname')); ?>:</b>
	<?php echo CHtml::encode($data->parentname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photoimage')); ?>:</b>
	<?php echo CHtml::encode($data->photoimage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emergencynumber')); ?>:</b>
	<?php echo CHtml::encode($data->emergencynumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postaladress')); ?>:</b>
	<?php echo CHtml::encode($data->postaladress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('classroom')); ?>:</b>
	<?php echo CHtml::encode($data->classroom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admindate')); ?>:</b>
	<?php echo CHtml::encode($data->admindate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dorm')); ?>:</b>
	<?php echo CHtml::encode($data->dorm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('religion')); ?>:</b>
	<?php echo CHtml::encode($data->religion); ?>
	<br />

	*/ ?>

</div>