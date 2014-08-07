<?php
/* @var $this FeereceiptController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Feereceipts',
);

$this->menu=array(
	array('label'=>'Create Feereceipt', 'url'=>array('create')),
	array('label'=>'Manage Feereceipt', 'url'=>array('admin')),
);
?>

<h1>Feereceipts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
