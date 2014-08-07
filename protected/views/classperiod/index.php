<?php
/* @var $this ClassperiodController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Classperiods',
);

$this->menu=array(
	array('label'=>'Create Classperiod', 'url'=>array('create')),
	array('label'=>'Manage Classperiod', 'url'=>array('admin')),
);
?>

<h1>Classperiods</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
