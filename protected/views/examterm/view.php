<?php
/* @var $this ExamtermController */
/* @var $model Examterm */

$this->breadcrumbs=array(
	'Examterms'=>array('index'),
	$model->examtermID,
);

$this->menu=array(
	array('label'=>'List Examterm', 'url'=>array('index')),
	array('label'=>'Create Examterm', 'url'=>array('create')),
	array('label'=>'Update Examterm', 'url'=>array('update', 'id'=>$model->examtermID)),
	array('label'=>'Delete Examterm', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->examtermID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Examterm', 'url'=>array('admin')),
);
?>

<h1>View Examterm #<?php echo $model->examtermID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'examtermID',
		'schoolID',
		'examtermname',
		'dateadded',
	),
)); ?>
