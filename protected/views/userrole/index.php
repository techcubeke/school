<?php
/* @var $this UserroleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Userroles',
);

$this->menu=array(
	array('label'=>'Create Userrole', 'url'=>array('create')),
	array('label'=>'Manage Userrole', 'url'=>array('admin')),
);
?>

<h1>Userroles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
