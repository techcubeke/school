<?php
/* @var $this StudentsubjectplanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Studentsubjectplans',
);

$this->menu=array(
	array('label'=>'Create Studentsubjectplan', 'url'=>array('create')),
	array('label'=>'Manage Studentsubjectplan', 'url'=>array('admin')),
);
?>

<h1>Studentsubjectplans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
