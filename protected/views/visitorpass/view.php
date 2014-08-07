<?php
/* @var $this VisitorpassController */
/* @var $model Visitorpass */

$this->breadcrumbs=array(
	'Visitorpasses'=>array('index'),
	$model->visitorpassID,
);

$this->menu=array(
	array('label'=>'List Visitorpass', 'url'=>array('index')),
	array('label'=>'Create Visitorpass', 'url'=>array('create')),
	array('label'=>'Update Visitorpass', 'url'=>array('update', 'id'=>$model->visitorpassID)),
	array('label'=>'Delete Visitorpass', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->visitorpassID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Visitorpass', 'url'=>array('admin')),
);
?>

<h1>View Visitorpass #<?php echo $model->visitorpassID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'visitorpassID',
		'schoolID',
		'visitorname',
		'visitorcardnumber',
		'address',
		'contactnumber',
		'numberofvisitors',
		'visitpurpose',
		'meetingwith',
		'visitdate',
		'intime',
		'outtime',
		'comments',
		'dateadded',
	),
)); ?>
