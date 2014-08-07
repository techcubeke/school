<?php
/* @var $this StaffController */
/* @var $data Staff */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('staffID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->staffID), array('view', 'id'=>$data->staffID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('schoolID')); ?>:</b>
	<?php echo CHtml::encode($data->schoolID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employeecode')); ?>:</b>
	<?php echo CHtml::encode($data->employeecode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('initials')); ?>:</b>
	<?php echo CHtml::encode($data->initials); ?>
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
	<b><?php echo CHtml::encode($data->getAttributeLabel('photoimage')); ?>:</b>
	<?php echo CHtml::encode($data->photoimage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employmenttype')); ?>:</b>
	<?php echo CHtml::encode($data->employmenttype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateofbirth')); ?>:</b>
	<?php echo CHtml::encode($data->dateofbirth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phoneno')); ?>:</b>
	<?php echo CHtml::encode($data->phoneno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('religion')); ?>:</b>
	<?php echo CHtml::encode($data->religion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jobtitle')); ?>:</b>
	<?php echo CHtml::encode($data->jobtitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('specialization')); ?>:</b>
	<?php echo CHtml::encode($data->specialization); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('maritalstatus')); ?>:</b>
	<?php echo CHtml::encode($data->maritalstatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('joindate')); ?>:</b>
	<?php echo CHtml::encode($data->joindate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('releasedate')); ?>:</b>
	<?php echo CHtml::encode($data->releasedate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nationalID')); ?>:</b>
	<?php echo CHtml::encode($data->nationalID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departmentcode')); ?>:</b>
	<?php echo CHtml::encode($data->departmentcode); ?>
	<br />

	*/ ?>

</div>