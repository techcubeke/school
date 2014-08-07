<?php
/* @var $this CurriculumplanController */
/* @var $model Curriculumplan */

$this->breadcrumbs=array(
	'Curriculumplans'=>array('index'),
	$model->curriculumplanID,
);

$this->menu=array(
	array('label'=>'List Curriculumplan', 'url'=>array('index')),
	array('label'=>'Create Curriculumplan', 'url'=>array('create')),
	array('label'=>'Update Curriculumplan', 'url'=>array('update', 'id'=>$model->curriculumplanID)),
	array('label'=>'Delete Curriculumplan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->curriculumplanID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Curriculumplan', 'url'=>array('admin')),
);
?>

<h1>View Curriculumplan #<?php echo $model->curriculumplanID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'curriculumplanID',
		'schoolID',
		'curriculumID',
		'bookID',
		'planmonth',
		'topic',
		'subtopic',
		'activity',
		'iscompleted',
		'dateadded',
		'datemodified',
	),
)); ?>
