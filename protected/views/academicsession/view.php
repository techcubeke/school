<?php
/* @var $this AcademicsessionController */
/* @var $model Academicsession */

$this->breadcrumbs=array(
	'Academicsessions'=>array('index'),
	$model->academicsessionID,
);

$this->menu=array(
	array('label'=>'List Academicsession', 'url'=>array('index')),
	array('label'=>'Create Academicsession', 'url'=>array('create')),
	array('label'=>'Update Academicsession', 'url'=>array('update', 'id'=>$model->academicsessionID)),
	array('label'=>'Delete Academicsession', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->academicsessionID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Academicsession', 'url'=>array('admin')),
);
?>

<h1>View Academicsession #<?php echo $model->academicsessionID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'academicsessionID',
		'schoolID',
		'sessionyear',
		'sessionopendate',
		'sessionclosedate',
		'sessionstatus',
		'dateadded',
	),
)); ?>
