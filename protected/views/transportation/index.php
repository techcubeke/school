<?php
/* @var $this TransportationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Transportations',
);

$this->menu=array(
	array('label'=>'Create Transportation', 'url'=>array('create')),
	array('label'=>'Manage Transportation', 'url'=>array('admin')),
);
?>

<h1>Transportations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
