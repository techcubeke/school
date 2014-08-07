<?php
/* @var $this BookstockController */
/* @var $model Bookstock */

$this->breadcrumbs=array(
	'Bookstocks'=>array('index'),
	$model->bookstockID,
);

$this->menu=array(
	array('label'=>'List Bookstock', 'url'=>array('index')),
	array('label'=>'Create Bookstock', 'url'=>array('create')),
	array('label'=>'Update Bookstock', 'url'=>array('update', 'id'=>$model->bookstockID)),
	array('label'=>'Delete Bookstock', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->bookstockID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bookstock', 'url'=>array('admin')),
);
?>

<h1>View Bookstock #<?php echo $model->bookstockID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'bookstockID',
		'schoolID',
		'vendorID',
		'bookID',
		'barcodevalue',
		'bookposition',
		'purchasedate',
		'purchasedby',
		'instock',
		'isreference',
		'reason',
		'dateadded',
		'datemodified',
	),
)); ?>
