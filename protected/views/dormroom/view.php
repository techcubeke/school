<?php
/* @var $this DormroomController */
/* @var $model Dormroom */

$this->breadcrumbs=array(
	'Dormrooms'=>array('index'),
	$model->dormname,
);

$this->menu=array(
	array('label'=>'List Dormroom', 'url'=>array('index')),
	array('label'=>'Create Dormroom', 'url'=>array('create')),
	array('label'=>'Update Dormroom', 'url'=>array('update', 'id'=>$model->dormname)),
	array('label'=>'Delete Dormroom', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->dormname),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dormroom', 'url'=>array('admin')),
);
?>

<h1>View Dormroom #<?php echo $model->dormname; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'dormID',
		'schoolID',
		'dormname',
		'beds',
	),
)); ?>
