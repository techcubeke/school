<?php
/* @var $this FuelconsumptionController */
/* @var $model Fuelconsumption */

$this->breadcrumbs=array(
	'Fuelconsumptions'=>array('index'),
	$model->fuelID=>array('view','id'=>$model->fuelID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Fuelconsumption', 'url'=>array('index')),
	array('label'=>'Create Fuelconsumption', 'url'=>array('create')),
	array('label'=>'View Fuelconsumption', 'url'=>array('view', 'id'=>$model->fuelID)),
	array('label'=>'Manage Fuelconsumption', 'url'=>array('admin')),
);
?>

<h1>Update Fuelconsumption <?php echo $model->fuelID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>