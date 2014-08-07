<?php
/* @var $this ClassroomController */
/* @var $model Classroom */

$this->breadcrumbs=array(
	'Classrooms'=>array('index'),
	$model->classID,
);

$this->menu=array(
	array('label'=>'List Classroom', 'url'=>array('index')),
	array('label'=>'Create Classroom', 'url'=>array('create')),
	array('label'=>'Update Classroom', 'url'=>array('update', 'id'=>$model->classID)),
	array('label'=>'Delete Classroom', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->classID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Classroom', 'url'=>array('admin')),
);
?>

<h1>View Classroom #<?php echo $model->classID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'classID',
		'schoolID',
		'classificationID',
		'classname',
		'staffID',
	),
)); ?>
