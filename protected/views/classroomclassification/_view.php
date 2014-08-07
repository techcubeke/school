<?php
/* @var $this ClassroomclassificationController */
/* @var $data Classroomclassification */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('classificationID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->classificationID), array('view', 'id'=>$data->classificationID)); ?>
	<br />


</div>