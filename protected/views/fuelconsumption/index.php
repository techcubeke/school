<?php
/* @var $this FuelconsumptionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fuelconsumptions',
);

$this->menu=array(
	array('label'=>'Create Fuelconsumption', 'url'=>array('create')),
	array('label'=>'Manage Fuelconsumption', 'url'=>array('admin')),
);
?>

<h1>Fuelconsumptions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
