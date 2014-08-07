<?php
/* @var $this FeereceiptController */
/* @var $model Feereceipt */

$this->breadcrumbs=array(
	'Feereceipts'=>array('index'),
	$model->feereceiptID,
);

$this->menu=array(
	array('label'=>'List Feereceipt', 'url'=>array('index')),
	array('label'=>'Create Feereceipt', 'url'=>array('create')),
	array('label'=>'Update Feereceipt', 'url'=>array('update', 'id'=>$model->feereceiptID)),
	array('label'=>'Delete Feereceipt', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->feereceiptID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Feereceipt', 'url'=>array('admin')),
);
?>

<h1>View Feereceipt #<?php echo $model->feereceiptID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'feereceiptID',
		'schoolID',
		'studentID',
		'classID',
		'invoicedate',
		'termtitle',
		'periodfrom',
		'periodto',
		'previousinvoiceamount',
		'previousamount',
		'duedate',
		'adjustedamount',
		'totalamount',
		'dateadded',
	),
)); ?>
