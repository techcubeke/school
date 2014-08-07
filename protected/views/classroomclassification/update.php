<?php
/* @var $this ClassroomclassificationController */
/* @var $model Classroomclassification */

$this->breadcrumbs=array(
	'Classroomclassifications'=>array('index'),
	$model->classificationID=>array('view','id'=>$model->classificationID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Classroomclassification', 'url'=>array('index')),
	array('label'=>'Create Classroomclassification', 'url'=>array('create')),
	array('label'=>'View Classroomclassification', 'url'=>array('view', 'id'=>$model->classificationID)),
	array('label'=>'Manage Classroomclassification', 'url'=>array('admin')),
);
?>

<h1>Update Classroomclassification <?php echo $model->classificationID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>