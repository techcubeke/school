<?php
/* @var $this FuelconsumptionController */
/* @var $model Fuelconsumption */

$this->breadcrumbs=array(
	'Fuelconsumptions'=>array('index'),
	$model->fuelID,
);

$this->menu=array(
	array('label'=>'List Fuelconsumption', 'url'=>array('index')),
	array('label'=>'Create Fuelconsumption', 'url'=>array('create')),
	array('label'=>'Update Fuelconsumption', 'url'=>array('update', 'id'=>$model->fuelID)),
	array('label'=>'Delete Fuelconsumption', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->fuelID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Fuelconsumption', 'url'=>array('admin')),
);
?>

<h1>View Fuelconsumption #<?php echo $model->fuelID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fuelID',
		'vehicleID',
		'fuelconsumed',
		'amount',
		'consumeddate',
	),
)); ?>
