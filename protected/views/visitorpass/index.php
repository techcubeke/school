<?php
/* @var $this VisitorpassController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Visitorpasses',
);

$this->menu=array(
	array('label'=>'Create Visitorpass', 'url'=>array('create')),
	array('label'=>'Manage Visitorpass', 'url'=>array('admin')),
);
?>

<h1>Visitorpasses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
