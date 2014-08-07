<?php
/* @var $this AssetController */
/* @var $model Asset */

$this->breadcrumbs=array(
	'Assets'=>array('index'),
	$model->assetID,
);

$this->menu=array(
	array('label'=>'List Asset', 'url'=>array('index')),
	array('label'=>'Create Asset', 'url'=>array('create')),
	array('label'=>'Update Asset', 'url'=>array('update', 'id'=>$model->assetID)),
	array('label'=>'Delete Asset', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->assetID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Asset', 'url'=>array('admin')),
);
?>

<h1>View Asset #<?php echo $model->assetID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'assetID',
		'schoolID',
		'label',
		'assettype',
		'description',
		'originalvalue',
		'currentvalue',
		'accessiondate',
		'quantity',
		'departmentcode',
	),
)); ?>
