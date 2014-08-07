<?php
/* @var $this EventplanController */
/* @var $model Eventplan */

$this->breadcrumbs=array(
	'Eventplans'=>array('index'),
	$model->eventID,
);

$this->menu=array(
	array('label'=>'List Eventplan', 'url'=>array('index')),
	array('label'=>'Create Eventplan', 'url'=>array('create')),
	array('label'=>'Update Eventplan', 'url'=>array('update', 'id'=>$model->eventID)),
	array('label'=>'Delete Eventplan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->eventID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Eventplan', 'url'=>array('admin')),
);
?>

<h1>View Eventplan #<?php echo $model->eventID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'eventID',
		'schoolID',
		'eventname',
		'description',
		'eventtype',
		'eventfrom',
		'eventto',
		'isworkingday',
		'dateadded',
		'datemodified',
	),
)); ?>
