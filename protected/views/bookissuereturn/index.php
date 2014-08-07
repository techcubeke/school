<?php
/* @var $this BookissuereturnController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bookissuereturns',
);

$this->menu=array(
	array('label'=>'Create Bookissuereturn', 'url'=>array('create')),
	array('label'=>'Manage Bookissuereturn', 'url'=>array('admin')),
);
?>

<h1>Bookissuereturns</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
