<?php
/* @var $this ClassroomclassificationController */
/* @var $model Classroomclassification */

$this->breadcrumbs=array(
	'Classroomclassifications'=>array('index'),
	$model->classificationID,
);

$this->menu=array(
	array('label'=>'List Classroomclassification', 'url'=>array('index')),
	array('label'=>'Create Classroomclassification', 'url'=>array('create')),
	array('label'=>'Update Classroomclassification', 'url'=>array('update', 'id'=>$model->classificationID)),
	array('label'=>'Delete Classroomclassification', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->classificationID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Classroomclassification', 'url'=>array('admin')),
);
?>

<h1>View Classroomclassification #<?php echo $model->classificationID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'classificationID',
	),
)); ?>
