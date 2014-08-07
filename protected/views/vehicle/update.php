<?php
/* @var $this VehicleController */
/* @var $model Vehicle */

$this->breadcrumbs=array(
	'Vehicles'=>array('index'),
	$model->vehicleID=>array('view','id'=>$model->vehicleID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vehicle', 'url'=>array('index')),
	array('label'=>'Create Vehicle', 'url'=>array('create')),
	array('label'=>'View Vehicle', 'url'=>array('view', 'id'=>$model->vehicleID)),
	array('label'=>'Manage Vehicle', 'url'=>array('admin')),
);
?>

<h1>Update Vehicle <?php echo $model->vehicleID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>