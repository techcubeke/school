<?php
/* @var $this ExamtermController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Examterms',
);

$this->menu=array(
	array('label'=>'Create Examterm', 'url'=>array('create')),
	array('label'=>'Manage Examterm', 'url'=>array('admin')),
);
?>

<h1>Examterms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
