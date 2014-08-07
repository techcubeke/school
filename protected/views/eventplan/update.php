<?php
/* @var $this EventplanController */
/* @var $model Eventplan */

$this->breadcrumbs=array(
	'Eventplans'=>array('index'),
	$model->eventID=>array('view','id'=>$model->eventID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Eventplan', 'url'=>array('index')),
	array('label'=>'Create Eventplan', 'url'=>array('create')),
	array('label'=>'View Eventplan', 'url'=>array('view', 'id'=>$model->eventID)),
	array('label'=>'Manage Eventplan', 'url'=>array('admin')),
);
?>

<h1>Update Eventplan <?php echo $model->eventID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>