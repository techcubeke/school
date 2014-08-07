<?php
/* @var $this StopdetailsController */
/* @var $model Stopdetails */

$this->breadcrumbs=array(
	'Stopdetails'=>array('index'),
	$model->stopID,
);

$this->menu=array(
	array('label'=>'List Stopdetails', 'url'=>array('index')),
	array('label'=>'Create Stopdetails', 'url'=>array('create')),
	array('label'=>'Update Stopdetails', 'url'=>array('update', 'id'=>$model->stopID)),
	array('label'=>'Delete Stopdetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->stopID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Stopdetails', 'url'=>array('admin')),
);
?>

<h1>View Stopdetails #<?php echo $model->stopID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'stopID',
		'routeID',
		'stopname',
		'fare',
		'arrivalmrng',
		'depaturemrng',
		'arrivalevng',
		'depatureevng',
	),
)); ?>
