<?php
/* @var $this StopdetailsController */
/* @var $model Stopdetails */

$this->breadcrumbs=array(
	'Stopdetails'=>array('index'),
	$model->stopID=>array('view','id'=>$model->stopID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Stopdetails', 'url'=>array('index')),
	array('label'=>'Create Stopdetails', 'url'=>array('create')),
	array('label'=>'View Stopdetails', 'url'=>array('view', 'id'=>$model->stopID)),
	array('label'=>'Manage Stopdetails', 'url'=>array('admin')),
);
?>

<h1>Update Stopdetails <?php echo $model->stopID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>