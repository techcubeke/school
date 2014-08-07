<?php
/* @var $this ClassroomclassificationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Classroomclassifications',
);

$this->menu=array(
	array('label'=>'Create Classroomclassification', 'url'=>array('create')),
	array('label'=>'Manage Classroomclassification', 'url'=>array('admin')),
);
?>

<h1>Classroomclassifications</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
