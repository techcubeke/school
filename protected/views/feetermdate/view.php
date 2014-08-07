<?php
/* @var $this FeetermdateController */
/* @var $model Feetermdate */

$this->breadcrumbs=array(
	'Feetermdates'=>array('index'),
	$model->feetermdateID,
);

$this->menu=array(
	array('label'=>'List Feetermdate', 'url'=>array('index')),
	array('label'=>'Create Feetermdate', 'url'=>array('create')),
	array('label'=>'Update Feetermdate', 'url'=>array('update', 'id'=>$model->feetermdateID)),
	array('label'=>'Delete Feetermdate', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->feetermdateID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Feetermdate', 'url'=>array('admin')),
);
?>

<h1>View Feetermdate #<?php echo $model->feetermdateID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'feetermdateID',
		'schoolID',
		'termnumber',
		'termtitle',
		'periodfrom',
		'periodto',
		'percentagecollection',
		'duedate',
		'monthcount',
		'dateadded',
	),
)); ?>
