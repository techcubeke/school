<?php
/* @var $this FeetermdateController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Feetermdates',
);

$this->menu=array(
	array('label'=>'Create Feetermdate', 'url'=>array('create')),
	array('label'=>'Manage Feetermdate', 'url'=>array('admin')),
);
?>

<h1>Feetermdates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
