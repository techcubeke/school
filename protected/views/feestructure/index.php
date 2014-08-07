<?php
/* @var $this FeestructureController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Feestructures',
);

$this->menu=array(
	array('label'=>'Create Feestructure', 'url'=>array('create')),
	array('label'=>'Manage Feestructure', 'url'=>array('admin')),
);
?>

<h1>Feestructures</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
