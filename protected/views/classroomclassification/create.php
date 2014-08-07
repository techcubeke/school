<?php
/* @var $this ClassroomclassificationController */
/* @var $model Classroomclassification */

$this->breadcrumbs=array(
	'Classroomclassifications'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Classroomclassification', 'url'=>array('index')),
	array('label'=>'Manage Classroomclassification', 'url'=>array('admin')),
);
?>

<h1>Create Classroomclassification</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>