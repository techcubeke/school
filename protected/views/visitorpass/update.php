<?php
/* @var $this VisitorpassController */
/* @var $model Visitorpass */

$this->breadcrumbs=array(
	'Visitorpasses'=>array('index'),
	$model->visitorpassID=>array('view','id'=>$model->visitorpassID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Visitorpass', 'url'=>array('index')),
	array('label'=>'Create Visitorpass', 'url'=>array('create')),
	array('label'=>'View Visitorpass', 'url'=>array('view', 'id'=>$model->visitorpassID)),
	array('label'=>'Manage Visitorpass', 'url'=>array('admin')),
);
?>

<h1>Update Visitorpass <?php echo $model->visitorpassID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>