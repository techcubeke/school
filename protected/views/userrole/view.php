<?php
/* @var $this UserroleController */
/* @var $model Userrole */

$this->breadcrumbs=array(
	'Userroles'=>array('index'),
	$model->roleID,
);

$this->menu=array(
	array('label'=>'List Userrole', 'url'=>array('index')),
	array('label'=>'Create Userrole', 'url'=>array('create')),
	array('label'=>'Update Userrole', 'url'=>array('update', 'id'=>$model->roleID)),
	array('label'=>'Delete Userrole', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->roleID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Userrole', 'url'=>array('admin')),
);
?>

<h1>View Userrole #<?php echo $model->roleID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'roleID',
		'role',
		'roledescription',
		'dateadded',
	),
)); ?>
