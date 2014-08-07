<?php
/* @var $this FeepaymentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Feepayments',
);

$this->menu=array(
	array('label'=>'Create Feepayment', 'url'=>array('create')),
	array('label'=>'Manage Feepayment', 'url'=>array('admin')),
);
?>

<h1>Feepayments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
