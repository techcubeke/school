<?php
/* @var $this FeestructureController */
/* @var $model Feestructure */

$this->breadcrumbs=array(
	'Feestructures'=>array('index'),
	$model->name=>array('view','id'=>$model->feestructureID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Feestructure', 'url'=>array('index')),
	array('label'=>'Create Feestructure', 'url'=>array('create')),
	array('label'=>'View Feestructure', 'url'=>array('view', 'id'=>$model->feestructureID)),
	array('label'=>'Manage Feestructure', 'url'=>array('admin')),
);
?>

<h1>Update Feestructure <?php echo $model->feestructureID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>