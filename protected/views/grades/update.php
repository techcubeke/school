<?php
/* @var $this GradesController */
/* @var $model Grades */

$this->breadcrumbs=array(
	'Grades'=>array('index'),
	$model->name=>array('view','id'=>$model->gradeID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Grades', 'url'=>array('index')),
	array('label'=>'Create Grades', 'url'=>array('create')),
	array('label'=>'View Grades', 'url'=>array('view', 'id'=>$model->gradeID)),
	array('label'=>'Manage Grades', 'url'=>array('admin')),
);
?>

<h1>Update Grades <?php echo $model->gradeID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>