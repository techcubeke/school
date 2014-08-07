<?php
/* @var $this FeereceiptController */
/* @var $model Feereceipt */

$this->breadcrumbs=array(
	'Feereceipts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Feereceipt', 'url'=>array('index')),
	array('label'=>'Manage Feereceipt', 'url'=>array('admin')),
);
?>

<h1>Create Feereceipt</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>