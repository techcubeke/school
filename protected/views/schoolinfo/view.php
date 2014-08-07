<?php
/* @var $this SchoolinfoController */
/* @var $model Schoolinfo */

$this->breadcrumbs=array(
	'Schoolinfos'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Schoolinfo', 'url'=>array('index')),
	array('label'=>'Create Schoolinfo', 'url'=>array('create')),
	array('label'=>'Update Schoolinfo', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Schoolinfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Schoolinfo', 'url'=>array('admin')),
);
?>

<h1>View Schoolinfo #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'schoolname',
		'logo',
		'motto',
		'principal',
		'foundationdate',
		'foundedby',
		'phoneno',
		'website',
		'email',
		'city',
		'zippostal',
		'addressline1',
		'addressline2',
		'about',
	),
)); ?>
