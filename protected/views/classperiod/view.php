<?php
/* @var $this ClassperiodController */
/* @var $model Classperiod */

$this->breadcrumbs=array(
	'Classperiods'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Classperiod', 'url'=>array('index')),
	array('label'=>'Create Classperiod', 'url'=>array('create')),
	array('label'=>'Update Classperiod', 'url'=>array('update', 'id'=>$model->periodID)),
	array('label'=>'Delete Classperiod', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->periodID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Classperiod', 'url'=>array('admin')),
);
?>

<h1>View Classperiod #<?php echo $model->periodID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'periodID',
		'name',
		'starttime',
		'endtime',
		'break',
	),
)); ?>
