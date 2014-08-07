<?php
/* @var $this RouteController */
/* @var $model Route */

$this->breadcrumbs=array(
	'Routes'=>array('index'),
	$model->routeID,
);

$this->menu=array(
	array('label'=>'List Route', 'url'=>array('index')),
	array('label'=>'Create Route', 'url'=>array('create')),
	array('label'=>'Update Route', 'url'=>array('update', 'id'=>$model->routeID)),
	array('label'=>'Delete Route', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->routeID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Route', 'url'=>array('admin')),
);
?>

<h1>View Route #<?php echo $model->routeID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'routeID',
		'vehicleID',
		'routename',
		'noofstops',
	),
)); ?>
