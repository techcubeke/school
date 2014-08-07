<?php
/* @var $this StopdetailsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Stopdetails',
);

$this->menu=array(
	array('label'=>'Create Stopdetails', 'url'=>array('create')),
	array('label'=>'Manage Stopdetails', 'url'=>array('admin')),
);
?>

<h1>Stopdetails</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
