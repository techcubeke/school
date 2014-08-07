<?php
/* @var $this RouteController */
/* @var $model Route */

$this->breadcrumbs=array(
	'Routes'=>array('index'),
	$model->routeID=>array('view','id'=>$model->routeID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Route', 'url'=>array('index')),
	array('label'=>'Create Route', 'url'=>array('create')),
	array('label'=>'View Route', 'url'=>array('view', 'id'=>$model->routeID)),
	array('label'=>'Manage Route', 'url'=>array('admin')),
);
?>

<h1>Update Route <?php echo $model->routeID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>