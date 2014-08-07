<?php
/* @var $this FinancialyearController */
/* @var $model Financialyear */

$this->breadcrumbs=array(
	'Financialyears'=>array('index'),
	$model->financialyearID,
);

$this->menu=array(
	array('label'=>'List Financialyear', 'url'=>array('index')),
	array('label'=>'Create Financialyear', 'url'=>array('create')),
	array('label'=>'Update Financialyear', 'url'=>array('update', 'id'=>$model->financialyearID)),
	array('label'=>'Delete Financialyear', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->financialyearID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Financialyear', 'url'=>array('admin')),
);
?>

<h1>View Financialyear #<?php echo $model->financialyearID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'financialyearID',
		'schoolID',
		'datefrom',
		'dateto',
		'isactive',
		'dateadded',
	),
)); ?>
