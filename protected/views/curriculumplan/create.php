<?php
/* @var $this CurriculumplanController */
/* @var $model Curriculumplan */

$this->breadcrumbs=array(
	'Curriculumplans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Curriculumplan', 'url'=>array('index')),
	array('label'=>'Manage Curriculumplan', 'url'=>array('admin')),
);
?>

<h1>Create Curriculumplan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>