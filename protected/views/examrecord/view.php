<?php
/* @var $this ExamrecordController */
/* @var $model Examrecord */

$this->breadcrumbs=array(
	'Examrecords'=>array('index'),
	$model->examID,
);

$this->menu=array(
	array('label'=>'List Examrecord', 'url'=>array('index')),
	array('label'=>'Create Examrecord', 'url'=>array('create')),
	array('label'=>'Update Examrecord', 'url'=>array('update', 'id'=>$model->examID)),
	array('label'=>'Delete Examrecord', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->examID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Examrecord', 'url'=>array('admin')),
);
?>

<h1>View Examrecord #<?php echo $model->examID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'examID',
		'schoolID',
		'academicsessionID',
		'examtermID',
		'subjectID',
		'classID',
		'studentID',
		'gradeID',
		'date',
		'totalmarks',
		'score',
		'percentage',
		'remarks',
	),
)); ?>
