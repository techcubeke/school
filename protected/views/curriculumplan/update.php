<?php
/* @var $this CurriculumplanController */
/* @var $model Curriculumplan */

$this->breadcrumbs=array(
	'Curriculumplans'=>array('index'),
	$model->curriculumplanID=>array('view','id'=>$model->curriculumplanID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Curriculumplan', 'url'=>array('index')),
	array('label'=>'Create Curriculumplan', 'url'=>array('create')),
	array('label'=>'View Curriculumplan', 'url'=>array('view', 'id'=>$model->curriculumplanID)),
	array('label'=>'Manage Curriculumplan', 'url'=>array('admin')),
);
?>

<h1>Update Curriculumplan <?php echo $model->curriculumplanID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>