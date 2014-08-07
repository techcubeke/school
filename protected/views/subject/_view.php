<?php
/* @var $this SubjectController */
/* @var $data Subject */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('subjectID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->subjectID), array('view', 'id'=>$data->subjectID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('schoolID')); ?>:</b>
	<?php echo CHtml::encode($data->schoolID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subjectname')); ?>:</b>
	<?php echo CHtml::encode($data->subjectname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subjectgroup')); ?>:</b>
	<?php echo CHtml::encode($data->subjectgroup); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subjectcode')); ?>:</b>
	<?php echo CHtml::encode($data->subjectcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateadded')); ?>:</b>
	<?php echo CHtml::encode($data->dateadded); ?>
	<br />


</div>