<?php
/* @var $this CurriculumController */
/* @var $model Curriculum */

$this->breadcrumbs=array(
	'Curriculums'=>array('index'),
	$model->curriculumID=>array('view','id'=>$model->curriculumID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Curriculum', 'url'=>array('index')),
	array('label'=>'Create Curriculum', 'url'=>array('create')),
	array('label'=>'View Curriculum', 'url'=>array('view', 'id'=>$model->curriculumID)),
	array('label'=>'Manage Curriculum', 'url'=>array('admin')),
);
?>

<h1>Update Curriculum <?php echo $model->curriculumID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>