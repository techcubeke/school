<?php
/* @var $this EventplanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Eventplans',
);

$this->menu=array(
	array('label'=>'Create Eventplan', 'url'=>array('create')),
	array('label'=>'Manage Eventplan', 'url'=>array('admin')),
);
?>

<h1>Eventplans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
