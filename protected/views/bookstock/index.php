<?php
/* @var $this BookstockController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bookstocks',
);

$this->menu=array(
	array('label'=>'Create Bookstock', 'url'=>array('create')),
	array('label'=>'Manage Bookstock', 'url'=>array('admin')),
);
?>

<h1>Bookstocks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
