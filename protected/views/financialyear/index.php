<?php
/* @var $this FinancialyearController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Financialyears',
);

$this->menu=array(
	array('label'=>'Create Financialyear', 'url'=>array('create')),
	array('label'=>'Manage Financialyear', 'url'=>array('admin')),
);
?>

<h1>Financialyears</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
