<?php
/* @var $this TimetableController */
/* @var $model Timetable */

$this->breadcrumbs=array(
	'Timetables'=>array('index'),
	$model->timetableID=>array('view','id'=>$model->timetableID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Timetable', 'url'=>array('index')),
	array('label'=>'Create Timetable', 'url'=>array('create')),
	array('label'=>'View Timetable', 'url'=>array('view', 'id'=>$model->timetableID)),
	array('label'=>'Manage Timetable', 'url'=>array('admin')),
);
?>

<h1>Update Timetable <?php echo $model->timetableID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>