<?php
/* @var $this DormroomController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dormrooms',
);

$this->menu=array(
	array('label'=>'Create Dormroom', 'url'=>array('create')),
	array('label'=>'Manage Dormroom', 'url'=>array('admin')),
);
?>

<h1>Dormrooms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
