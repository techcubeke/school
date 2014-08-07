<?php
/* @var $this FuelconsumptionController */
/* @var $model Fuelconsumption */

$this->breadcrumbs=array(
	'Fuelconsumptions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Fuelconsumption', 'url'=>array('index')),
	array('label'=>'Manage Fuelconsumption', 'url'=>array('admin')),
);
?>

<h1>Create Fuelconsumption</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>