<?php
/* @var $this VendorController */
/* @var $model Vendor */

$this->breadcrumbs=array(
	'Vendors'=>array('index'),
	$model->vendorID,
);

$this->menu=array(
	array('label'=>'List Vendor', 'url'=>array('index')),
	array('label'=>'Create Vendor', 'url'=>array('create')),
	array('label'=>'Update Vendor', 'url'=>array('update', 'id'=>$model->vendorID)),
	array('label'=>'Delete Vendor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->vendorID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vendor', 'url'=>array('admin')),
);
?>

<h1>View Vendor #<?php echo $model->vendorID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'vendorID',
		'schoolID',
		'initials',
		'photoimage',
		'firstname',
		'lastname',
		'vendortype',
		'address',
		'phoneno',
		'email',
		'dateadded',
		'notes',
	),
)); ?>
