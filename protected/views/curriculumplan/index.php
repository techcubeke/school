<?php
/* @var $this CurriculumplanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Curriculumplans',
);

$this->menu=array(
	array('label'=>'Create Curriculumplan', 'url'=>array('create')),
	array('label'=>'Manage Curriculumplan', 'url'=>array('admin')),
);
?>

<h1>Curriculumplans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
