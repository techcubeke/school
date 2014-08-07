<?php
/* @var $this ParentsController */
/* @var $model Parents */

$this->breadcrumbs=array(
	'Parents'=>array('index'),
	$model->parentID,
);

$this->menu=array(
	array('label'=>'List Parents', 'url'=>array('index')),
	array('label'=>'Create Parents', 'url'=>array('create')),
	array('label'=>'Update Parents', 'url'=>array('update', 'id'=>$model->parentID)),
	array('label'=>'Delete Parents', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->parentID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Parents', 'url'=>array('admin')),
);
?>

<h1>View Parents #<?php echo $model->parentID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'parentID',
		'schoolID',
		'studentID',
		'fullname',
		'photoimage',
		'parentrelation',
		'occupation',
		'officename',
		'officeaddress',
		'phonenumber',
		'emailaddress',
		'dateadded',
		'datemodified',
	),
)); ?>
