<?php
/* @var $this ClassroomController */
/* @var $model Classroom */

$this->breadcrumbs=array(
	'Classrooms'=>array('index'),
	$model->classID=>array('view','id'=>$model->classID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Classroom', 'url'=>array('index')),
	array('label'=>'Create Classroom', 'url'=>array('create')),
	array('label'=>'View Classroom', 'url'=>array('view', 'id'=>$model->classID)),
	array('label'=>'Manage Classroom', 'url'=>array('admin')),
);
?>

<h1>Update Classroom <?php echo $model->classID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>