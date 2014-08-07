<?php
/* @var $this FeereceiptController */
/* @var $model Feereceipt */

$this->breadcrumbs=array(
	'Feereceipts'=>array('index'),
	$model->feereceiptID=>array('view','id'=>$model->feereceiptID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Feereceipt', 'url'=>array('index')),
	array('label'=>'Create Feereceipt', 'url'=>array('create')),
	array('label'=>'View Feereceipt', 'url'=>array('view', 'id'=>$model->feereceiptID)),
	array('label'=>'Manage Feereceipt', 'url'=>array('admin')),
);
?>

<h1>Update Feereceipt <?php echo $model->feereceiptID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>