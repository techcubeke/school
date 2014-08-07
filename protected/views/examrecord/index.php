<?php
/* @var $this ExamrecordController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Examrecords',
);

$this->menu=array(
	array('label'=>'Create Examrecord', 'url'=>array('create')),
	array('label'=>'Manage Examrecord', 'url'=>array('admin')),
);
?>

<h1>Examrecords</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
