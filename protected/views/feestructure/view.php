<?php
/* @var $this FeestructureController */
/* @var $model Feestructure */

$this->breadcrumbs=array(
	'Feestructures'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Feestructure', 'url'=>array('index')),
	array('label'=>'Create Feestructure', 'url'=>array('create')),
	array('label'=>'Update Feestructure', 'url'=>array('update', 'id'=>$model->feestructureID)),
	array('label'=>'Delete Feestructure', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->feestructureID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Feestructure', 'url'=>array('admin')),
);
?>

<h1>View Feestructure #<?php echo $model->feestructureID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'feestructureID',
		'schoolID',
		'studentID',
		'name',
		'description',
		'amount',
	),
)); ?>
