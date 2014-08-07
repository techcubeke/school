<?php
/* @var $this FeestructureController */
/* @var $model Feestructure */

$this->breadcrumbs=array(
	'Feestructures'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Feestructure', 'url'=>array('index')),
	array('label'=>'Manage Feestructure', 'url'=>array('admin')),
);
?>

<h1>Create Feestructure</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>